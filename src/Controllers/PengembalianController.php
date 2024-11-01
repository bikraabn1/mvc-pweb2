<?php

namespace App\Controllers;

use App\Models\PengembalianModel;
use App\Models\PeminjamanModel;
use App\Controller;
use DateTime;

class PengembalianController extends Controller
{
    public $PengembalianModel;
    public $PeminjamanModel;
    public function __construct()
    {
        $this->PengembalianModel = new PengembalianModel();
        $this->PeminjamanModel = new PeminjamanModel();
    }

    public function index()
    {
        if (isset($_GET['id_pinjam'])) {
            $id = $_GET['id_pinjam'];

            $existingData = $this->PengembalianModel->findByPeminjamanId($id);

            if ($existingData) {
                $datas = $this->PengembalianModel->getDatas();
                $this->render('/pengembalian', ['datas' => $datas]);
                return;
            }

            $today = new DateTime();
            $date = $today->format('Y-m-d');
            $denda = $this->getDenda($date);
            $newData = [$id, $denda, $date];

            $this->PengembalianModel->setDatas($newData);
        }

        if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['delete'])){
            var_dump($_POST);
            $id = $_POST['id_peminjam'];
            $this->PengembalianModel->deleteDatas($id);
            header("Location: /pengembalian");
            return;
        }

        $datas = $this->PengembalianModel->getDatas();
        $this->render('/pengembalian', ['datas' => $datas]);
    }
    public function getDenda($date)
    {
        $today = new DateTime();
        $now = $today->format('Y-m-d');

        $tanggalAwal = strtotime($now);
        $tanggalAkhir = strtotime($date);

        $selisihDetik = $tanggalAkhir - $tanggalAwal;
        $selisihHari = $selisihDetik / (60 * 60 * 24);

        if ($selisihHari <= 14) {
            return 0;
        } else {
            return $selisihHari * 500;
        }
    }

    public function updatePengembalian()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['update'])){
            $id_pengembalian = $_POST['id'];
            $date = $_POST['date'];
            $name = $_POST['name'];
            $datas = [$name, $date, $id_pengembalian];
            $this->PengembalianModel->updateDatas($datas);
            header('Location: /pengembalian');
        }
        $id = $_GET['id'];
        $peminjam = $this->PengembalianModel->getPeminjam();
        $this->render('/updatePengembalian', ['peminjam' => $peminjam, 'id' => $id]);
    }
}
