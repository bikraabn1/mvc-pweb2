<?php namespace App\Models;

use App\Config\DB;

class BukuModel extends DB{
    public function  __construct(){
        parent::__construct();
    }

    public function getDatas(){
        $sql =  "SELECT * FROM buku JOIN kategori_buku ON  buku.id_kategori = kategori_buku.id_kategori";

        $result = $this->conn->query($sql);
        $books = [];
        while ($row = $result->fetch_assoc()) {
            $books[] = $row; 
        }
        return $books;
    }

    public function getKategori(){
        $sql =  "SELECT * from kategori_buku";

        $result = $this->conn->query($sql);
        $category = [];
        while ($row = $result->fetch_assoc()) {
            $category[] = $row; 
        }
        return $category;
    }

    public function setDatas($data){
        $books = implode("', '", $data);
        $sql = "INSERT INTO buku (judul_buku, penulis, tahun_terbit, id_kategori) VALUES ('$books')";
        $this->conn->query($sql);
    }
    
    public function deleteData($id) {
        $this->conn->query('SET FOREIGN_KEY_CHECKS=0');
        
        $query = "DELETE FROM buku WHERE id_buku = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        
        $this->conn->query('SET FOREIGN_KEY_CHECKS=1');
    }

    public function updateData($title, $author, $year, $id_category, $id){
        $sql = "UPDATE buku SET judul_buku = '". $title ."', penulis = '" . $author . "', tahun_terbit = '". $year ."' , id_kategori = '". $id_category ."' WHERE id_buku = '" . $id . "'";
        $this->conn->query($sql);
    }
}