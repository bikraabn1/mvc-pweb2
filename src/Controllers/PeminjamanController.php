<?php namespace App\Controllers;

use App\Controller;
use App\Models\PeminjamanModel;
use App\Models\PengembalianModel;

class PeminjamanController extends Controller{
    public $model;
    public $pengembalianModel;

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
            header("Location: /peminjaman");
            return;
        }

        $this->render('/newPinjam', ['books' => $books]);
    }

    public function handlePeminjaman() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['delete'])) {
                $id_peminjaman = $_POST['id_peminjaman'];
                $this->model->deletePeminjaman($id_peminjaman);
                header("Location: /peminjaman");
                exit();
            } 
            else if (isset($_POST['return'])) {
                $id = $_POST['id_peminjaman'];
                $date = $_POST['date'];
                $this->model->setIsLoan($id);
                header("Location: /pengembalian?id_pinjam=$id&date=$date");
                exit();
            }
        }
        
        $peminjaman = $this->model->getDatas();
        $this->render('peminjaman', ['peminjaman' => $peminjaman]);
    }

    public function postPeminjaman(){
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
            $id_peminjaman = $_POST['id_peminjam'];
            $name = $_POST['name'];
            $date = $_POST['date'];
            $books = $_POST['books'];
            
            $this->model->updatePeminjaman($name, $date, $books, $id_peminjaman);
            header("Location: /peminjaman");
            return;
        }
    }
}