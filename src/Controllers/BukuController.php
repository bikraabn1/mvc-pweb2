<?php namespace App\Controllers;

use App\Controller;
use App\Models\BukuModel;

class BukuController extends Controller{
    public $BukuModel;
    public function __construct(){
        $this->BukuModel = new BukuModel();
    }

    public function index(){
        $books = $this->BukuModel->getDatas();
        $this->render('index', ['books' => $books]);
    }

    public function addBook(){
        $category = $this->BukuModel->getKategori();

        $this->render('/newBook',['category' => $category]);

        if(isset($_POST['submit'])){
            $books = [$_POST['title'], $_POST['publisher'], $_POST['year']];
            $this->BukuModel->setDatas($books);
        }
    }
}