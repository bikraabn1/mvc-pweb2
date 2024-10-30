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
        $books = [];
        while ($row = $result->fetch_assoc()) {
            $books[] = $row; 
        }
        return $books;
    }

    public function setDatas($data){
        $books = implode("', '", $data);
        $sql = "INSERT INTO buku (judul_buku, penulis, tahun_terbit, id_kategori) VALUES ('$books')";
        $this->conn->query($sql);
    }
    
    public function deleteData($id){
        $sql = "DELETE FROM buku WHERE id_buku = '$id'";
        $this->conn->query($sql);
    }

    public function updateData($data, $id){
        $sql = "UPDATE buku SET judul_buku = $data[0], penulis = $data[1], tahun_terbit = $data[2] , id_kategori = $data[3]) where id_buku = $id";
        $this->conn->query($sql);
    }
}