<?php 

require_once MODEL_PATH . '/ProductModel.php';

class UserController extends Controller
{
     private ProductModel $product;
    
     public function __construct()
     {
        $this->product = new ProductModel;
     }

    public function index()
    {
        $this->view('user/index', ['title' => 'Home Page']);
    }

    public function product(){

        $this->view('user/product', ['title' => 'Product Page']);

    }

    public function about(){

        $this->view('user/about', ['title' => 'About Page']);

    }

    public function contact(){

        $this->view('user/contact', ['title' => 'Contact Page']);

    }
    public function detail(){

        $this->view('user/detail', ['title' => 'Detail Page']);

    }

    public function getAllByStatus() // api
    {
        $product = $this->product->getAllByStatus();
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

    public function getById() // api
    {
        $id = (int)($_GET['id'] ?? null); 

        $product = $this->product->findProduct($id);
        if (!$product) {
            $this->json([
                'success' => false,
                'message' => 'Failed to get data',
                'data' => []
            ]);
        }

        $this->json([
            'success' => true,
            'message' => 'Get data success',
            'data' => $product // [$product] => array of product(s)
        ]);
    }

    
}