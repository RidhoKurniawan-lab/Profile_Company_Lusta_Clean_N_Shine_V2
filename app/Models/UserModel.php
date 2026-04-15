<?php

require_once CORE_PATH . '/Model.php';

class UserModel extends Model 
{
    protected string $table = 'users';

    public function findByEmail(string $email){
        return $this->query("SELECT * FROM {$this->table} WHERE email = :email LIMIT 1", ['email' => $email])->fetch();
    }
}