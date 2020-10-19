<?php

class User_model extends Controller {
    private $table = 'artikel';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function index()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        $this->db->execute();
        return $this->db->resultSet();
    }
    
    public function getArtikelById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_artikel = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function loginUser($data)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username = :email && password = :password'); 
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $query = $this->db->single();
        

    }
    

    


}