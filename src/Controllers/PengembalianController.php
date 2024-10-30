<?php namespace App\Controllers;

use App\Controller;
use App\Models\PengembalianModel;


class PengembalianController extends Controller{
    private $pengembalianModel;
    public function __construct() {
        $this->pengembalianModel = new PengembalianModel();
    }

    public function index() {
        $data = $this->pengembalianModel->getPengembalian();
        $this->render('/tampilPengembalian',['data' => $data]);
    }

    public function tambahPengembalian($id_buku, $id_anggota, $tanggal_pengembalian, $denda) {
        $this->pengembalianModel->tambahPengembalian($id_buku, $id_anggota, $tanggal_pengembalian, $denda);
        header("Location: /pengembalian");
    }

    public function hapusPengembalian($id_pengembalian) {
        $this->pengembalianModel->hapusPengembalian($id_pengembalian);
        header("Location: /pengembalian");
    }

    public function updatePengembalian($id_pengembalian, $tanggal_pengembalian, $denda) {
        $this->pengembalianModel->updatePengembalian($id_pengembalian, $tanggal_pengembalian, $denda);
        header("Location: /pengembalian");
    }
}
