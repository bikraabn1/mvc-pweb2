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
        $this->render('peminjaman', ['peminjaman' => $peminjaman]);
    }
    
    public function addPeminjaman() {
        $books = $this->model->getBuku();

        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

            $peminjaman = [$_POST['name'], $_POST['date'], $_POST['books']];
            $this->model->setDatas($peminjaman);
            header("Location: /");
            return;
        }

        $this->render('/newPinjam', ['books' => $books]);

        
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
        $id_peminjaman = $_GET['id'];
        $name = $_GET['nama_peminjam'];
        $date = $_GET['tanggal_peminjaman'];
        $books_id = $_GET['judul_buku'];

        $datas = [$id_peminjaman, $name, $date, $books_id];
        
        var_dump($datas);
        $this->render('updatePinjam', ['datas' => $datas, 'books' => $books]);
    }

    public function postPeminjaman(){
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
            $id_peminjaman = $_POST['id_peminjam'];
            $name = $_POST['name'];
            $date = $_POST['date'];
            $books = $_POST['books'];

            $data = [$name, $date, $books, $id_peminjaman];
            
            $this->model->updatePeminjaman($data);
            return;
        }
    }
}