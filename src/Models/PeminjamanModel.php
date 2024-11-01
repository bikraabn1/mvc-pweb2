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
            $row['is_loan'] = ($row['is_loan'] === "0") ? "Belum Dikembalikan" : "Sudah Dikembalikan";
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

    public function setIsLoan($id){
        $sql = "UPDATE peminjaman SET is_loan = '1' WHERE id_peminjaman = $id";
        $this->conn->query($sql);
    }

    public function setDatas($data) {
        $peminjaman = implode("', '", $data);
        $sql = "INSERT INTO peminjaman (nama_peminjam, tanggal_peminjaman, id_buku) VALUES ('$peminjaman')";
        $this->conn->query($sql);
    }

    public function deletePeminjaman($id) {
        $this->conn->query('SET FOREIGN_KEY_CHECKS=0');
        
        $query = "DELETE FROM peminjaman WHERE id_peminjaman = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        
        $this->conn->query('SET FOREIGN_KEY_CHECKS=1');
    }

    public function updatePeminjaman($nama, $tgl , $id_buku, $id){
        $sql = "UPDATE peminjaman SET nama_peminjam = '". $nama ."', tanggal_peminjaman = '". $tgl ."', id_buku = '". $id_buku ."' WHERE id_peminjaman = '". $id."'";
        $this->conn->query($sql);
    }
}