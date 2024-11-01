<?php

namespace App\Controllers;

use App\Models\PengembalianModel;
use App\Controller;
use DateTime;

class PengembalianController extends Controller
{
    public $PengembalianModel;
    public function __construct()
    {
        $this->PengembalianModel = new PengembalianModel();
    }

    public function index()
    {
        if (isset($_GET['id_pinjam'])) {
            $id = $_GET['id_pinjam'];
            
            $datas = $this->PengembalianModel->getDatas();
            $data = $this->PengembalianModel->find($id);

            if ($data) {
                $this->render('/pengembalian', ['datas' => $datas]); 
                return;
            }
        }

        $today = new DateTime();
        $date = $today->format('Y-m-d');
        $denda = $this->getDenda($date);
        $newData = [$id, $denda, $date];

        var_dump($newData);
        $this->PengembalianModel->setDatas($newData);
        $this->render('/pengembalian', ['datas' => $newData]); 
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

    public function updatePengembalian(){
        if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['update'])){
            var_dump($_POST);
            $id = $_POST['id_peminjam'];
            $datas = $this->PengembalianModel->find($id);
            $this->render('updatePengembalian', ['datas' => $datas]);
        }
    }


}
