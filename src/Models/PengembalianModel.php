<?php namespace App\Models;

use App\Config\DB;

class PengembalianModel extends DB {
    public function __construct() {
        parent::__construct();
    }

    public function getDatas() {
        $sql = "SELECT * FROM pengembalian JOIN peminjaman ON pengembalian.id_peminjaman = peminjaman.id_peminjaman";
        $result = $this->conn->query($sql);
        $pengembalian = [];
        while ($row = $result->fetch_assoc()) {
            $pengembalian[] = $row; 
        }
        return $pengembalian;
    }

    public function setDatas($data) {
        $sql = "INSERT INTO pengembalian (id_peminjaman, jumlah_denda, tanggal_pengembalian) VALUES ('" . $data['id_peminjaman'] . "', '" . $data['jumlah_denda'] . "', '" . $data['tanggal_pengembalian'] . "')";
        $this->conn->query($sql);
    }
    
    public function deleteDatas($id) {
        $sql = "DELETE FROM pengembalian WHERE id_pengembalian = '$id'";
        $this->conn->query($sql);
    }

    public function updateDatas($data) {
        $sql = "UPDATE pengembalian SET id_peminjaman = '" . $data['id_peminjaman'] . "', jumlah_denda = '" . $data['jumlah_denda'] . "', tanggal_pengembalian = '" . $data['tanggal_pengembalian'] . "' WHERE id_pengembalian = '" . $data['id_pengembalian'] . "'";
        $this->conn->query($sql);
    }


}
    
