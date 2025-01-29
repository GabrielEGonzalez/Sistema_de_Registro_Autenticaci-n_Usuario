<?php 

require_once ("C:\Users\Ideapad 1\appAutenticacion\Sistema_de_Registro_Autenticaci-n_Usuario\config\database.php");
    
class user{

    private $conn = '';

    public function __construct(){
        $this->conn = new database();
    }

    public function craerUsuario(){
        $nombre = $_POST['nombre'];
        $correo = $_POST['Correo'];
        $password = $_POST['password'];

        $sql = "INSERT INTO usuario (usuario, correo, password) VALUES (:nombre, :correo, :password)";
        $stmt = $this->conn->conexion()->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    }
}