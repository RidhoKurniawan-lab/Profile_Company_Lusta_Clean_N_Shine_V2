<?php

require_once CORE_PATH . '/Model.php';

class ProductLinkModel extends Model
{
    protected string $table = 'product_link';

    public function find($id): array
    {
        return $this->query("SELECT * FROM {$this->table} WHERE product_id = :pid", 
        ['pid' => $id])->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSummary()
    {
        return $this->query("SELECT COUNT(*) FROM {$this->table}")->fetchColumn();
    }
}
