<?php

class UserLogin_model {
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // public function getUserLogin($data)
    // {
    //     $this->db->query('SELECT * FROM '. $this->table . ' WHERE username = :username');
    //     $this->db->bind('username', $username);
    //     return $this->db->loginSet();
        
    // }

}