<?php namespace App\Models;

use App\Config\DB;

class PengembalianModel extends DB {
    public function __construct() {
        parent::__construct();
    }

    public function getDatas() {
        $sql = "SELECT * FROM pengembalian JOIN peminjaman ON pengembalian.id_peminjaman = peminjaman.id_peminjaman JOIN buku ON peminjaman.id_buku = buku.id_buku;";
        $result = $this->conn->query($sql);
        $pengembalian = [];
        while ($row = $result->fetch_assoc()) {
            $pengembalian[] = $row; 
        }
        return $pengembalian;
    }

    public function setDatas($data) {
        $sql = "INSERT INTO pengembalian (id_peminjaman, jumlah_denda, tanggal_pengembalian) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$data[0], $data[1], $data[2]]);
    }
    
    public function deleteDatas($id) {
        $this->conn->query('SET FOREIGN_KEY_CHECKS=0');
        
        $query = "DELETE FROM pengembalian WHERE id_pengembalian = '$id'";
        $this->conn->query($query);
        
        $this->conn->query('SET FOREIGN_KEY_CHECKS=1');
    }

    public function updateDatas($data) {
        $sql = "UPDATE pengembalian SET id_peminjaman = ?, tanggal_pengembalian = ? WHERE id_pengembalian = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$data[0], $data[1], $data[2]]);
    }

}
    
