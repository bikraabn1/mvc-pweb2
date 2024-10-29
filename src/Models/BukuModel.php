<?php namespace App\Models;

use App\Config\DB;

class BukuModel extends DB{
    protected $buku;

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
}