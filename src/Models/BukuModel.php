<?php namespace App\Models;

use App\Config\DB;

class BukuModel extends DB{
    protected $buku, $judul, $penulis, $tahun_terbit;

    public function  __construct(){
        parent::__construct();
    }

    public function getDatas(){
        $sql =  "SELECT * FROM buku";
        $query = $this->db->query($sql);
        $this->buku = $query;
        return $this->buku;
    }

    public function getJudul(){
        
    }
}