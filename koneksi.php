<?php
class Koneksi {
    
    protected $conn;

    public function __construct() 
    {
        $host   = "localhost";
        $user   = "root";
        $pass   = "";
        $db     = "db_barang_atk";

        $this->conn = new mysqli($host, $user, $pass, $db);

        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }
    public function getConnection() {
    return $this->conn;
    }
}