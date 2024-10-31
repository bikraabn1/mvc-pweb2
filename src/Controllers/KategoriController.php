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
        $this->render('kategori', ['categories' => $categories]);
    }

    public function addCategory(){
        $category = $this->KategoriModel->getDatas();
        $this->render('/newCategory',['category' => $category]);

        if(isset($_POST['submit'])){
            $categories = [$_POST['nama_kategori']];
            $this->KategoriModel->setDatas($categories);
        }
    }
    
    public function deleteCategory(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_kategori'])) {
            $id = $_POST['id_kategori'];
            $this->KategoriModel->deleteData($id);
            header('Location: /kategori');
            exit();
        }
    }

    public function updateCategory(){
        $id = $_GET['id'];
        $cat = $_GET['cat'];

        $datas = [$id, $cat]; 

        $this->render('updatekategori', ['datas' => $datas]);
    }

    public function postCategory(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
            $id = $_POST['id_kategori'];
            $cat = $_POST['nama_kategori'];

            $datas = [$id, $cat];

            $this->KategoriModel->updateData($datas);
            $this->render('updatekategori', ['datas' => $this->KategoriModel->getDatas()]);
            header(header: 'Location: /kategori');
            return;
        }
    }
}