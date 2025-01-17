<?php

class database{
    private $username = 'root';
    private $dbname = "usuario_autenticacion";

    private $host = "localhost";

    private $password = "Gabriel28";


    public $conn;


    public function conexion():PDO{

        $this->conn = null;

        return $this->conn;
    }
}