<?php namespace App\Models;


class DB{
    private $host = "127.0.0.1";
    private $user = "root";
    private $password = "";
    private $db = "db_gweh";
    protected $conn;

    public function  __construct(){
        
        $this->conn =  new \mysqli($this->host, $this->user, $this->password, $this->db);
        if ($this->conn->connect_error) die("Connection failed: " . $this->conn->connect_error);

    }

    public function create(){
        $sql = "INSERT INTO user (name, password) VALUES";
    }

}
