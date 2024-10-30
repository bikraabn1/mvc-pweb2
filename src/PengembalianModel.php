<?php namespace App\Models;

use App\config\DB;

class PengembalianModel extends DB{
    private $table = 'peminjaman';

    public function __construct(){
        parent::__construct();
    }

    public function getAllPeminjaman(){
        $sql = "SELECT * FROM peminjaman JOIN buku ON peminjaman.id_buku = buku.id_buku";
        $result = $this->conn->query($sql);
        $peminjaman = [];
        while ($row = $result->fetch_assoc()) {
            $peminjaman[] = $row;
        }
        return $peminjaman;
    }

    public function addPeminjaman($data) {
        $nama_peminjam = $data['nama_peminjam'];
        $tanggal_peminjaman = $data['tanggal_peminjaman'];
        $id_buku = $data['id_buku'];
        $sql = "INSERT INTO peminjaman (nama_peminjam, tanggal_peminjaman, id_buku)
        values ('$nama_peminjam', '$tanggal_peminjaman', '$id_buku')";
        return $this->conn->query($sql);
    }

    public function updatePeminjaman($id, $data) {
        $nama_peminjam = $data['nama_peminjam'];
        $tanggal_peminjaman = $data['tanggal_peminjaman'];
        $id_buku = $data['id_buku'];
        $sql = "UPDATE peminjaman SET nama_peminjam='$nama_peminjam', tanggal_peminjaman='$tanggal_peminjaman', id_buku='$id_buku'
        WHERE id_peminjaman='$id_peminjaman'";
        return $this->conn->query($sql);
    }

    public function deletePeminjaman($id_peminjaman) {
        $sql = "DELETE FROM peminjaman WHERE id_peminjaman='$id_peminjaman'";
        return $this->conn->query($sql);
    }
}