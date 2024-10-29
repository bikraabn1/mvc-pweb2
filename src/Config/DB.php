<?php namespace App\Config;


class DB{
    private $host = "127.0.0.1";
    private $user = "root";
    private $password = "";
    private $db = "db_buku";
    protected $conn;

    public function  __construct(){
        
        $this->conn =  new \mysqli($this->host, $this->user, $this->password, $this->db);
        if ($this->conn->connect_error) die("Connection failed: " . $this->conn->connect_error);

    }

    public function create(){
    }
}
