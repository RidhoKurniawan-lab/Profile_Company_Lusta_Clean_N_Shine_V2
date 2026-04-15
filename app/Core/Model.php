<?php

require_once CONFIG_PATH . '/Database.php';

abstract class Model
{
    protected PDO $db;
    protected string $table;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    protected function query(string $sql, array $params = [])
    {
        $stmt = $this->db->prepare($sql);

        $stmt->execute($params);

        return $stmt;
    }

    protected function queryBind(string $sql, array $params = [])
    {
        $stmt = $this->db->prepare($sql);

        foreach ($params as $key => $value) {
            $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
            $stmt->bindValue(':' . $key, $value, $type);
        }

        $stmt->execute();
        return $stmt;
    }

    public function all(): array
    {
        return $this->query(
            "SELECT * FROM {$this->table}"
        )->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(array $data): int
    {
        $columns = array_keys($data);
        $fields  = implode(', ', $columns);
        $params  = ':' . implode(', :', $columns);

        $this->query(
            "INSERT INTO {$this->table} ($fields) VALUES ($params)",
            $data
        );

        return (int) $this->db->lastInsertId();
    }

    public function update(array $data): bool
    {
        $id = $data['id'];
        unset($data['id']);

        $sets = [];
        foreach ($data as $column => $value) {
            $sets[] = "{$column} = :{$column}";
        }

        $setString = implode(', ', $sets);

        $data['id'] = $id;

        $sql = "UPDATE {$this->table} SET {$setString} WHERE id = :id";

        return $this->query($sql, $data)->rowCount() > 0;
    }

    public function delete(int $id): bool
    {
        $stmt = $this->query(
            "DELETE FROM {$this->table} WHERE id = :id",
            ['id' => $id]
        );

        return $stmt->rowCount() > 0;
    }
}
