<?php namespace App\Models;

use App\Config\DB;

class BukuModel extends DB{
    protected $buku;

    public function  __construct(){
        parent::__construct();
    }

    public function getDatas(){
        $sql =  "SELECT * FROM buku";
        $result = $this->conn->query($sql);
        $books = [];
        while ($row = $result->fetch_assoc()) {
            $books[] = $row; // Menambahkan setiap baris ke dalam array
        }
        return $books;
    }
}