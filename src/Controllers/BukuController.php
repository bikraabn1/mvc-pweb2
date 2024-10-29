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

    public function addUser(){
        if(isset($_POST['submit'])){
            echo "bisa incik bos";
        }
        $this->render('newUser');
    }
}