<?php

class database{
    private $username = 'root';
    private $dbname = "usuario";

    private $host = "localhost";

    private $password = "Gabriel28";


    public $conn;


    public function conexion():PDO{

        $this->conn = null;
        try{
            $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){

            echo "Error de conexion: " . $e->getMessage();
        }

        return $this->conn;
    }
}