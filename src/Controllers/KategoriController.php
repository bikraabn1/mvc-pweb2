<?php namespace App\Controllers;

use App\Controller;
use App\Models\KategoriModel;

class KategoriController extends Controller{
    public $KategoriModel;
    public function __construct(){
        $this->KategoriModel = new KategoriModel();
    }

    public function index(){
        $categories = $this->KategoriModel->getDatas();
        $this->render('index', ['categories' => $categories]);
    }

    public function addCategory(){
        $category = $this->KategoriModel->getDatas();
        $this->render('/newCategory',['category' => $category]);

        if(isset($_POST['submit'])){
            $categories = [$_POST['nama_kategori']];
            $this->KategoriModel->setDatas($categories);
        }
    }
}