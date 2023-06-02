<?php

class BlogModel {

    private $table = "blog";
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllBlog() {
        $this->db->query("SELECT blog.*, kategori.nama_kategori FROM " . $this->table . " JOIN kategori ON kategori.nama_kategori = blog.kategori_nama");
        return $this->db->resultSet();
    }

    public function tambahBlog($data) {
        $this->db->query("INSERT INTO blog (nama_judul, nama_penulis, tanggal, kategori_nama, komentar) 
            VALUES (:nama_judul, :nama_penulis, :tanggal, :kategori_nama, :komentar)");
        $this->db->bind('nama_judul', $data['nama_judul']);
        $this->db->bind('nama_penulis', $data['nama_penulis']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('kategori_nama', $data['kategori_nama']);
        $this->db->bind('komentar', $data['komentar']);
        $this->db->execute();

        return $this->db->rowCount();
    }


    public function getBlogById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    

public function updateDataBlog($data) {
    $query = "UPDATE blog SET nama_judul = :nama_judul, nama_penulis = :nama_penulis, tanggal = :tanggal, kategori_nama = :kategori_nama, komentar = :komentar WHERE id = :id";
    $this->db->query($query);
    $this->db->bind(':id', $data['id']);
    $this->db->bind(':nama_judul', $data['nama_judul']);
    $this->db->bind(':nama_penulis', $data['nama_penulis']);
    $this->db->bind(':tanggal', $data['tanggal']);
    $this->db->bind(':kategori_nama', $data['kategori_nama']);
    $this->db->bind(':komentar', $data['komentar']);
    $this->db->execute();

    return $this->db->rowCount();
}

    

public function cariBlog() {
    $key = $_POST['key'];
    $this->db->query("SELECT * FROM " . $this->table . " WHERE nama_judul LIKE :key 
                      OR nama_penulis LIKE :key 
                      OR tanggal LIKE :key 
                      OR kategori_nama LIKE :key 
                      OR komentar LIKE :key");
    $this->db->bind(':key', "%$key%", PDO::PARAM_STR);
    return $this->db->resultSet();
}
    
    
    

    public function deleteBlog($id){
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        $this->db->execute();
    
        return $this->db->rowCount();
    }


    
    



}



?>
