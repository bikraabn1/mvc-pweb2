<?php namespace App\Controllers;

use App\Models\PengembalianModel;
use App\Controller;

class PengembalianController extends Controller{
    public $PengembalianModel;
    public function __construct(){
        $this->PengembalianModel = new PengembalianModel();
    }

    public function index(){
        $data = $this->PengembalianModel->getDatas();
        $this->render('/pengembalian', ['data' => $data]);
    }

    public function addDatas(){
        $pengembalian = $this->PengembalianModel->getDatas();
        $this->render('/newPengembalian');

        if(isset($_POST['submit']))
        $pengembalian = [$_POST['id_pengembalian']];
        $this->PengembalianModel->setDatas($pengembalian);
    }

    public function deleteDatas(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
            $id = $_POST['id_pengembalian'];
            $this->PengembalianModel->deleteData($id);
            header('Location: /pengembalian');
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


    public function addPengembalian(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
            $id = $_POST[''];
            $cat = $_POST[''];

            $datas = [$id, $cat];

            $this->KategoriModel->updateDatas($datas);
            $this->render('newPengembalian', ['datas' => $this->PengembalianModel->getDatas()]);
            header(header: 'Location: /pengembalian');
            return;
        }
        $this->render('newPengembalian', ['datas' => $this->PengembalianModel->getDatas()]);
    }

}
