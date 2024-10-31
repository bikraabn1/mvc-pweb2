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
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
            $id = $_POST['id_kategori'];
            $this->KategoriModel->deleteData($id);
            header('Location: /kategori');
        }
    }

    public function updateCategory(){
        $category = $this->KategoriModel->getDatas();
        if (!isset($_GET['id']) && isset($_GET['name'])) {
        $category_id = $_GET['id'];
        $category_name = $_GET['name'];

        $data = [
            'id_kategori' => $category_id,
            'nama_kategori' => $category_name
        ];
    }   else{
            header('Location: /kategori');
            return;
        }

        $this->render('/updatekategori', ['category' => $category, 'data' => $data]);
    }

    public function postCategory(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
            $id = $_POST['id_kategori'];
            $name = $_POST['nama_kategori'];

            $data = [$id, $name];

            $this->KategoriModel->updateData($data);
            header('Location: /kategori');
            return;
        }
    }
}