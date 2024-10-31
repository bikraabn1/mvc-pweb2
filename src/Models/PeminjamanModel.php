<?php namespace App\Models;

use App\Config\DB;

class PeminjamanModel extends DB{

    public function __construct(){
        parent::__construct();
    }

    public function getDatas(){
        $sql = "SELECT * FROM peminjaman JOIN buku ON peminjaman.id_buku = buku.id_buku";
        $result = $this->conn->query($sql);
        $peminjaman = [];
        while ($row = $result->fetch_assoc()) {
            $peminjaman[] = $row;
        }
        return $peminjaman;
    }

    public function getBuku(){
        $sql = "SELECT * FROM buku";
        $result = $this->conn->query($sql);
        $peminjaman = [];
        while ($row = $result->fetch_assoc()) {
            $peminjaman[] = $row;
        }
        return $peminjaman;
    }

    public function setDatas($data) {
        $peminjaman = implode("', '", $data);
        $sql = "INSERT INTO peminjaman (nama_peminjam, tanggal_peminjaman, id_buku) VALUES ('$peminjaman')";
        $this->conn->query($sql);
    }

    public function deletePeminjaman($id_peminjaman){
        $sql = "DELETE FROM peminjaman WHERE id_peminjaman = '$id_peminjaman'";
        $this->conn->query($sql);
    }

    public function updatePeminjaman($data){
        $sql = "UPDATE peminjaman SET nama_peminjam = '" . $data[0] . "', tanggal_peminjaman = '" . $data[1]. "', id_buku = '". $data[2] ."' WHERE id_peminjaman = '" .$data[3]. "'";
        $this->conn->query($sql);
        echo "hello world";
    }
}