<?php

namespace App\Controllers;

use App\Controller;
use App\Models\BukuModel;

class BukuController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new BukuModel();
    }

    public function index()
    {
        $books = $this->model->getDatas();
        $this->render('index', ['books' => $books]);
    }

    public function addBook()
    {
        $category = $this->model->getKategori();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            $year = $_POST['year'];

            if ($year < 1900 || $year > 2100 || !is_numeric($year)) {
                $this->render('/newBook',  ['category' => $category]);
                echo "
                <script>
                    document.body.addEventListener('load', yearHandler())

                    function yearHandler(){
                        Swal.fire({
                                title: 'Error!',
                                text: 'Mohon Isi Tahun dengan Valid',
                                icon: 'error',
                                confirmButtonText: 'OK'
                        })
                    }
                </script>";
                return;
            }

            $books = [$_POST['title'], $_POST['publisher'], $_POST['year'], $_POST['category']];
            $this->model->setDatas($books);
            header("Location: /");
            return;
        }

        $this->render('/newBook', ['category' => $category]);
    }

    public function deleteBook()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
            $id = $_POST['id_buku'];
            $this->model->deleteData($id);
            header("Location: /");
            return;
        }
    }

    public function updateBook()
    {
        $category = $this->model->getKategori();
        $id = $_GET['id'];
        $title = $_GET['judul_buku'];
        $author = $_GET['penulis'];
        $getYear = $_GET['tahun_terbit'];
        $category_name = $_GET['nama_kategori'];

        $datas = [$id, $title, $author, $getYear, $category_name];

        $this->render('updateData', ['datas' => $datas, 'category' => $category]);
    }

    public function postBook()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
            $id = $_POST['id_buku'];
            $title = $_POST['title'];
            $author = $_POST['author'];
            $year = $_POST['year'];
            $category = $_POST['category'];

            $data = [$title, $author, $year, $category, $id];

            $this->model->updateData($data);
            header("Location: /");
            return;
        }
    }
}
