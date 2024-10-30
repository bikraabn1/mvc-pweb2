<?php namespace App\Models;

use App\Config\DB;

class KategoriModel extends DB{
    public function  __construct(){
        parent::__construct();
    }

    public function getDatas(){
        $sql =  "SELECT * FROM kategori_buku";
        $result = $this->conn->query($sql);
        $categories = [];
        while ($row = $result->fetch_assoc()) {
            $categories[] = $row; 
        }
        return $categories;
    }

    public function setDatas($data){
        $categories = implode("', '", $data);
        $sql = "INSERT INTO kategori_buku (nama_kategori) VALUES ('$categories')";
        $this->conn->query($sql);
    }
}