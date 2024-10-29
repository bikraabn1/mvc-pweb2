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
        $sql = "INSERT INTO buku (judul_buku, penulis, tahun_terbit, id_kategori) VALUES ('$books',1)";
        $this->conn->query($sql);
    }
}