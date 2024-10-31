<?php namespace App\Controllers;

use App\Controller;
use App\Models\PeminjamanModel;

class PeminjamanController extends Controller{
    public $model;

    public function __construct(){
        $this->model = new PeminjamanModel();
    }

    public function index() {
        $peminjaman = $this->model->getDatas();
        $this->render('index', ['peminjaman' => $peminjaman]);
    }
    
    public function addPeminjaman() {
        $books = $this->model->getBuku();

        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            $date = $_POST['date'];

            if($date > date('Y-m-d')) {
                $this->render('/newPinjam');
                return;
            }

            $peminjaman = [$_POST['name'], $_POST['date'], $_POST['books']];
            $this->model->setDatas($peminjaman);
            header("Location: /");
            return;
        }

        $this->render('/newPeminjaman', ['peminjaman' => $peminjaman]);

        
    }

    public function deletePeminjaman() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
            $id_peminjaman = $_POST['id_peminjaman'];
            $this->model->deletePeminjaman($id_peminjaman);
            header("Location: /");
        }
    }

    public function updatePeminjaman(){
        $books = $this->model->getBuku();
        $id_peminjaman = $_GET['id_peminjaman'];
        $name = $_GET['nama_peminjam'];
        $date = $_GET['tanggal_peminjaman'];
        $books_id = $_GET['id_buku'];

        $datas = [$id_peminjaman, $name, $date, $books_id];

        $this->render('updatePeminjaman', ['datas' => $datas, 'books' => $books]);
    }

    public function postPeminjaman(){
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
            $id_peminjaman = $_POST['id_peminjaman'];
            $name = $_POST['name'];
            $date = $_POST['date'];
            $books = $_POST['books'];

            $data = [$name, $date, $books, $id_peminjaman];

            $this->model->updatePeminjaman($data);
            header("Location: /");
            return;
        }
    }
}