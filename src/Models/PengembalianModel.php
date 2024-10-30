<?php

namespace App\Models;

use App\Config\DB;

class PengembalianModel extends DB {

    public function __construct() {
        parent::__construct();
    }

    public function tambahPengembalian($id_buku, $id_anggota, $tanggal_pengembalian, $denda) {
        $query = "INSERT INTO pengembalian (id_buku, id_anggota, tanggal_pengembalian, denda) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("iisd", $id_buku, $id_anggota, $tanggal_pengembalian, $denda);
        return $stmt->execute();
    }

    public function getPengembalian() {
        $query = "SELECT * FROM pengembalian";
        $result = $this->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function hapusPengembalian($id_pengembalian) {
        $query = "DELETE FROM pengembalian WHERE id_pengembalian = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id_pengembalian);
        return $stmt->execute();
    }

    public function updatePengembalian($id_pengembalian, $tanggal_pengembalian, $denda) {
        $query = "UPDATE pengembalian SET tanggal_pengembalian = ?, denda = ? WHERE id_pengembalian = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sdi", $tanggal_pengembalian, $denda, $id_pengembalian);
        return $stmt->execute();
    }
}
?>
