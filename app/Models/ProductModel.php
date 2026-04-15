<?php

require_once CORE_PATH . '/Model.php';

class ProductModel extends Model
{
    protected string $table = 'products';

    public function getAllByStatus()
    {
        return $this->query("SELECT * FROM {$this->table} WHERE status = :status", ['status' => 'active'])->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createProduct(array $data): int
    {

        return $this->create($data);
    }

    public function updateProduct(array $data)
    {

        return $this->update($data);
    }

    public function find($id)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE id = :id", ['id' => $id])->fetch();
    }

    public function findProduct($id)
    {
        // Ambil semua row produk + link
        $rows = $this->query(
            "SELECT p.*, c.name AS category_name, l.url, l.platform
         FROM {$this->table} p
         JOIN categories c ON c.id = p.category_id
         LEFT JOIN `product_link` l ON l.product_id = p.id
         WHERE p.id = :id",
            ['id' => $id]
        )->fetchAll();

        if (!$rows) {
            return [];
        }

        // Ambil data produk dari row pertama
        $product = $rows[0];

        // Buat array links
        $product['links'] = [];
        foreach ($rows as $row) { // kalau ada link
            $product['links'][] = [
                'url' => $row['url'],
                'platform' => $row['platform']
            ];
        }

        // Hapus field link duplikat kalau mau (optional)
        unset($product['url'], $product['platform']);

        return $product;
    }


    public function getAllWithCategory(
        int $limit,
        int $offset,
        ?int $categoryId = null,
        ?int $minPrice = null,
        ?int $maxPrice = null,
        ?int $minStock = null,
        ?int $maxStock = null,
        ?string $sort = null,
        ?string $status = null,
        ?string $search = null,
    ): array {
        $sql = "SELECT p.*, c.name AS category FROM {$this->table} p JOIN categories c ON c.id = p.category_id WHERE 1=1 ";

        $params = [];

        if ($categoryId) {
            $sql .= "AND p.category_id = :category_id ";
            $params['category_id'] = $categoryId;
        }

        if ($minPrice) {
            $sql .= "AND p.price >= :minPrice ";
            $params['minPrice'] = $minPrice;
        }

        if ($maxPrice) {
            $sql .= "AND p.price <= :maxPrice ";
            $params['maxPrice'] = $maxPrice;
        }

        if ($minStock) {
            $sql .= "AND p.stock >= :minStock ";
            $params['minStock'] = $minStock;
        }

        if ($maxStock) {
            $sql .= "AND p.stock <= :maxStock ";
            $params['maxStock'] = $maxStock;
        }

        if ($status && $status !== 'all' && $status !== 'null') {
            $sql .= "AND p.status = :status ";
            $params['status'] = $status;
        }

        if ($search && $search !== 'null') {
            $sql .= "AND p.name LIKE :search ";
            $params['search'] = "%{$search}%";
        }

        $orderBy = 'p.created_at DESC ';
        switch ($sort) {
            case 'oldest':
                $orderBy = 'p.created_at ASC ';
                break;
            case 'name_asc':
                $orderBy = 'p.name ASC ';
                break;
            case 'name_desc':
                $orderBy = 'p.name DESC ';
                break;
            case 'price_asc':
                $orderBy = 'p.price ASC ';
                break;
            case 'price_desc':
                $orderBy = 'p.price DESC ';
                break;
        }
        $sql .= "ORDER BY $orderBy ";

        $sql .= "LIMIT $limit OFFSET $offset";

        return $this->queryBind($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function CountAll(array $filter = []): int
    {

        $categoryId = $filter['categoryId'] ?? null;
        $minPrice = $filter['minPrice'] ?? null;
        $maxPrice = $filter['maxPrice'] ?? null;
        $minStock = $filter[' minStock '] ?? null;
        $maxStock = $filter['maxStock'] ?? null;
        $status = $filter['status'] ?? null;
        $search = $filter['search'] ?? null;


        $sql = "SELECT COUNT(*) FROM {$this->table} WHERE 1=1 ";

        $params = [];

        if ($categoryId) {
            $sql .= "AND category_id = :category_id ";
            $params['category_id'] = $categoryId;
        }

        if ($minPrice) {
            $sql .= "AND price >= :minPrice ";
            $params['minPrice'] = $minPrice;
        }

        if ($maxPrice) {
            $sql .= "AND price <= :maxPrice ";
            $params['maxPrice'] = $maxPrice;
        }

        if ($minStock) {
            $sql .= "AND stock >= :minStock ";
            $params['minStock'] = $minStock;
        }

        if ($maxStock) {
            $sql .= "AND stock <= :maxStock ";
            $params['maxStock'] = $maxStock;
        }

        if ($status && $status !== 'all' && $status !== 'null') {
            $sql .= "AND status = :status ";
            $params['status'] = $status;
        }

        if ($search && $search !== 'null') {
            $sql .= "AND name LIKE :search ";
            $params['search'] = "%{$search}%";
        }

        return (int) $this->queryBind($sql, $params)->fetchColumn();
    }
}
