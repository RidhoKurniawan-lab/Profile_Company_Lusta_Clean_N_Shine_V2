<?php

use Dompdf\Dompdf;
use Dompdf\Options;

require_once CORE_PATH . '/Auth.php';
require_once MODEL_PATH . '/CategoryModel.php';
require_once MODEL_PATH . '/ProductModel.php';
require_once MODEL_PATH . '/ProductLinkModel.php';

class AdminApiController extends Controller
{

    private CategoryModel $category;
    private ProductModel $product;
    private ProductLinkModel $productLink;

    public function __construct()
    {
        $this->category = new CategoryModel;

        $this->product = new ProductModel;

        $this->productLink = new ProductLinkModel;

        Auth::requireApiLogin();
    }


    public function exportProductPdf()
    {

        $products = $this->product->All();

        ob_start();
        require VIEWS_PATH . '/admin/product/export.php';
        $html = ob_get_clean();

        $options = new Options();
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream('product-report.pdf', [
            'Attachment' => false
        ]);
    }

    public function getDataDashboard()
    {

        $totalActive = $this->product->CountAll([
            'status' => 'active'
        ]);

        $totalDeActive = $this->product->CountAll([
            'status' => 'deactive'
        ]);

        $total = $this->product->CountAll();


        $totalProductLink = $this->productLink->getSummary();

        $this->json([
            'success' => true,
            'message' => 'Get summary success',
            'summary' => [
                'totalActive' => $totalActive,
                'totalDeActive' => $totalDeActive,
                'totalProduct' => $total,
                'totalLink' => $totalProductLink
            ]
        ]);
    }

    public function getProductLinkById()
    {

        $id = max(1, (int)($_GET['id'] ?? null));

        $productLink = $this->productLink->find($id);

        if (!$productLink) {
            $this->json([
                'success' => false,
                'message' => 'Get data failed',
            ]);
        }

        $this->json([
            'success' => true,
            'message' => 'Get data success',
            'data' => $productLink
        ]);
    }

    public function updateProductLinks()
    {

        $data = json_decode(file_get_contents('php://input'), true);
        $links = $data['link'] ?? [];
        $id = (int)($_GET['id'] ?? null);

        if (!$id || $id === null) {
            $this->json([
                'success' => false,
                'message' => 'Product ID not valid'
            ], 404);
        }

        $oldLinks = $this->productLink->find($id);
        $oldIds = array_column($oldLinks, 'id');
        $newIds = [];

        foreach ($links as $link) {
            if (!empty($link['id'])) {
                $newIds[] = (int)$link['id'];
            }
        }

        $deleteIds = array_diff($oldIds, $newIds);
        foreach ($deleteIds as $id) {
            $this->productLink->delete($id);
        }

        foreach ($links as $link) {
            if (!empty($link['id'])) {
                $this->productLink->update([
                    'id' => $link['id'],
                    'url' => $link['url'],
                    'platform' => $link['platform']
                ]);
                continue;
            }
            $this->productLink->create([
                'product_id' => $id,
                'url' => $link['url'],
                'platform' => $link['platform'],
            ]);
        }
        $this->json([
            'success' => true,
            'message' => 'Link Updated'
        ]);
    }

    public function deleteProduct()
    {
        $id = (int)($_GET['id'] ?? null);
        if (!$id || $id === null) {
            $this->json([
                'success' => false,
                'message' => 'Product ID not valid'
            ], 404);
        }

        $getProduct = $this->product->find($id);
        if (!$getProduct) {
            $this->json([
                'success' => false,
                'message' => 'Product not found'
            ], 404);
        }

        if ($getProduct['image'] !== 'default') {
            $oldPath = PUBLIC_PATH . '/assets/uploads/products/' . $getProduct['image'];
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
        }

        $product = $this->product->delete($id);
        if (!$product) {
            $this->json([
                'success' => false,
                'message' => $product,

            ], 404);
        }

        $this->json([
            'success' => true,
            'message' => 'Product Deleted'
        ]);
    }

    public function updateProduct()
    {
        $id = max(1, (int)($_GET['id'] ?? null));

        $request = $_POST;
        $image = $_FILES['image'] ?? null;

        // Ambil data lama
        $product = $this->product->find($id);
        if (!$product) {
            $this->json([
                'success' => false,
                'message' => 'Product not found'
            ], 404);
        }

        $data = [
            'id'          => $id,
            'name'        => $request['name'],
            'description' => $request['description'],
            'status'      => $request['status'],
            'price'       => $request['price'],
            'stock'       => $request['stock'],
            'category_id' => $request['category_id'],
            'updated_at'  => date('Y-m-d H:i:s')
        ];

        if ($image && $image['error'] === UPLOAD_ERR_OK) {

            $allowed = ['image/jpeg', 'image/png', 'image/webp'];
            if (!in_array($image['type'], $allowed)) {
                $this->json([
                    'success' => false,
                    'message' => 'Invalid image type'
                ], 422);
            }

            $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
            $imageName = uniqid('Product_') . '.' . $ext;

            move_uploaded_file(
                $image['tmp_name'],
                PUBLIC_PATH . '/assets/uploads/products/' . $imageName
            );

            if ($product['image'] !== 'default') {
                $oldPath = PUBLIC_PATH . '/assets/uploads/products/' . $product['image'];
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            // hanya set image kalau upload baru
            $data['image'] = $imageName;
        }

        $this->product->updateProduct($data);

        $this->json([
            'success' => true,
            'message' => 'Product Updated'
        ]);
    }


    public function getProductById()
    {

        $id = max(1, (int)($_GET['id'] ?? null));

        $product = $this->product->find($id);

        if (!$product) {
            $this->json([
                'success' => false,
                'message' => 'Get data failed',
            ]);
        }

        $this->json([
            'success' => true,
            'message' => 'Get data success',
            'data' => $product
        ]);
    }

    public function getProduct()
    {

        $page = max(1, (int)($_GET['page'] ?? 1));
        $limit = max(1, (int)($_GET['limit'] ?? 1));
        $category =  isset($_GET['category']) ? (int)($_GET['category']) : null;
        $minPrice =  isset($_GET['minPrice']) ? (int)($_GET['minPrice']) : null;
        $maxPrice =  isset($_GET['maxPrice']) ? (int)($_GET['maxPrice']) : null;
        $minStock =  isset($_GET['minStock']) ? (int)($_GET['minStock']) : null;
        $maxStock =  isset($_GET['maxStock']) ? (int)($_GET['maxStock']) : null;
        $sort =  isset($_GET['sort']) ? ($_GET['sort']) : null;
        $status =  isset($_GET['status']) ? ($_GET['status']) : null;
        $search =  isset($_GET['search']) ? ($_GET['search']) : null;

        $offset = ($page - 1) * $limit;

        $product = $this->product->getAllWithCategory($limit, $offset, $category, $minPrice, $maxPrice, $minStock, $maxStock, $sort, $status, $search);

        $total = $this->product->CountAll([
            'category' => $category,
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
            'minStock' => $minStock,
            'maxStock' => $maxStock,
            'sort' => $sort,
            'status' => $status,
            'search' => $search,
        ]);

        $totalActive = $this->product->CountAll([
            'status' => 'active'
        ]);

        $totalDeActive = $this->product->CountAll([
            'status' => 'deactive'
        ]);

        $totalOutOfStock = $this->product->CountAll([
            'maxStock' => 1
        ]);

        $totalLowStock = $this->product->CountAll([
            'maxStock' => 10
        ]);

        if (!$product) {
            $this->json([
                'success' => false,
                'message' => 'Get data failed',
            ]);
        }

        $this->json([
            'success' => true,
            'message' => 'Get data success',
            'data' => $product,
            'summary' => [
                'active' => $totalActive,
                'deactive' => $totalDeActive,
                'outofstock' => $totalOutOfStock,
                'lowstock' => $totalLowStock
            ],
            'meta' => [
                'page' => $page,
                'limit' => $limit,
                'total' => $total,
                'total_page' => ceil($total / $limit)
            ]
        ]);
    }
// create product
    public function createProduct()
    {

        $request = $_POST;
        $imageName = 'default';
        $image = $_FILES['image'];

        if (!empty($image) && $image['error'] === UPLOAD_ERR_OK) {

            $allowed = ['image/jpeg', 'image/png', 'image/webp'];

            if (!in_array($image['type'], $allowed)) {
                $this->json([
                    'success' => false,
                    'message' => 'Invalid image type'
                ], 422);
            }

            $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
            $imageName = uniqid('Product_') . '.' . $ext;

            move_uploaded_file(
                $image['tmp_name'],
                PUBLIC_PATH . '/assets/uploads/products/' . $imageName
            );
        }

        $id = $this->product->createProduct([
            'name'        => $request['name'],
            'description' => $request['description'],
            'image'       => $imageName,
            'status'      => $request['status'],
            'price'       => $request['price'],
            'stock'       => $request['stock'],
            'category_id' => $request['category_id'],
            'user_id'     => Auth::user()['id'],
            'created_at' => date('Y-m-d H:i:s')
        ]);

        $this->json([
            'success' => true,
            'message' => 'Product Created',
            'id' => $id
        ]);
    }

    // get user
    public function getUser()
    {
        $user = Auth::user();

        if ($user == null) {
            $this->json([
                'success' => false,
                'message' => 'Get data failed',
            ]);
        }

        $this->json([
            'success' => true,
            'message' => 'Get data success',
            'data' => $user
        ]);
    }

    // get category
    public function getCategory()
    {

        $category = $this->category->all();

        if (!$category) {
            $this->json([
                'success' => false,
                'message' => 'Get data failed',
            ]);
        }

        $this->json([
            'success' => true,
            'message' => 'Get data success',
            'data' => $category
        ]);
    }
}
