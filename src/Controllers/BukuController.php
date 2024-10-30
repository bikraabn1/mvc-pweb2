<?php namespace App\Controllers;

use App\Controller;
use App\Models\BukuModel;
use Throwable;

class BukuController extends Controller{
    public $model;
    public function __construct(){
        $this->model = new BukuModel();
    }

    public function index(){
        $books = $this->model->getDatas();
        if(sizeof($books)  > 0){
            $this->render('index', ['books' => $books]);
            return;
        }
        $this->render('indexnotable');
    }

    public function addBook(){
        $category = $this->model->getKategori();

        $this->render('/newBook',['category' => $category]);

        if(isset($_POST['submit'])){

            $books = [$_POST['title'], $_POST['publisher'], $_POST['year'], $_POST['category']];
            $this->model->setDatas($books);
        }
    }

    public function deleteBook(){

    }

    public function editBook(){

    }
}