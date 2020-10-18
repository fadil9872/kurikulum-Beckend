<?php

class Artikel_model extends Controller {
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
    
    public function tambahDataArtikel($data)
    {
        $query = "INSERT INTO artikel VALUES (NULL, :judul, :penulis, :kategori, :artikel) ";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('artikel', $data['artikel']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataArtikel($id)
    {
        $query = "DELETE FROM artikel WHERE id_artikel = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    
    public function ubahDataArtikel($data)
    {
        $query = "UPDATE artikel SET
                 judul = :judul, 
                 penulis = :penulis, 
                 kategori = :kategori, 
                 artikel = :artikel 
                 WHERE id_artikel = :id ";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('artikel', $data['artikel']);
        $this->db->bind('id', $data['id_artikel']);

        $this->db->execute();
        return $this->db->rowCount();

    }


}