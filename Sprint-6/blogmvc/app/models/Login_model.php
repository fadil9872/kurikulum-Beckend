<?php

class Login_model extends Controller {
    private $table = 'user';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function loginUser($data)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username = :email && pass = :password'); 
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);

        // $this->db->execute();
        $result = $this->db->resultSet();
        if ($result = $this->db->rowCount($result)) {
            $_SESSION['user'] =
            [
                "name" => $data['email'],
                "status" => "Logged In"
            ];
            return true;
        }

    }

    public function registerUser($data)
    {
        $query = "INSERT INTO user VALUES (NULL, :email, :password, :alamat ) ";

        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('alamat', $data['alamat']);

        $this->db->execute();
        return $this->db->rowCount();
    }

 

}