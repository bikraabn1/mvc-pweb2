<?php

namespace App\Controllers;

use App\Controller;
use App\Models\BukuModel;

class BukuController extends Controller{
    public $model;
    public function __construct(){
        $this->model = new BukuModel();
    }

    public function index(){
        $books = $this->model->getDatas();
        $this->render('index', ['books' => $books]);
    }

    public function addBook(){
        $category = $this->model->getKategori();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            $year = $_POST['year'];

            if ($year < 1900 || $year > 2100) {
                $this->render('/newBook', ['category' => $category]);
                return;
            }

            $books = [$_POST['title'], $_POST['publisher'], $_POST['year'], $_POST['category']];
            $this->model->setDatas($books);
            header("Location: /");
            return;
        }

        $this->render('/newBook', ['category' => $category]);

        
    }

    public function deleteBook(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
            $id = $_POST['id_buku'];
            $this->model->deleteData($id);
            header("Location: /");
            return;
        }
    }

    public function updateBook(){
        $category = $this->model->getKategori();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
            $year = $_POST['year'];
            $id =  $_POST['id_buku'];


            if ($year < 1900 || $year > 2100) {
                $this->render('/updateData', ['category' => $category]);
                return;
            }

            $books = [$_POST['title'], $_POST['publisher'], $_POST['year'], $_POST['category']];
            $this->model->updateData($books, $id);
            header("Location: /");
            return;
        }

        $this->render('/updateData', ['category' => $category]);
    }
}
