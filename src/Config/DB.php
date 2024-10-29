<?php namespace App\Config;


class DB{
    private $host = "mdi.my.id";
    private $user = "basdeat2_usr2";
    private $password = 'Ft($kWTkCha_D5jv2x';
    private $db = "basdeat2_klp2";
    protected $conn;

    public function  __construct(){
        
        $this->conn =  new \mysqli($this->host, $this->user, $this->password, $this->db);
        if ($this->conn->connect_error) die("Connection failed: " . $this->conn->connect_error);

    }

    public function create(){
    }
}
