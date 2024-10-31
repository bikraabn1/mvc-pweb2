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

    public function deleteData($id){
        $sql = "DELETE FROM kategori_buku WHERE id_kategori = $id";
        $this->conn->query($sql);
    }

    public function updateData($data){
        $id = $data[0];
        $name = $data[1];
        $sql = "UPDATE kategori_buku SET nama_kategori = '$name' WHERE id_kategori = $id";
        $this->conn->query($sql);
    }
}