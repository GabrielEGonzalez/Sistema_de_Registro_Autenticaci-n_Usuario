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

        header('Location: /public/inicio/home');
    }

    public function login(){
        $correo = $_POST['correo'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM usuario WHERE correo = :correo AND password = :password";
        $stmt = $this->conn->conexion()->prepare($sql);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            session_start();
            $_SESSION['usuario'] = $result['usuario'];
            header('Location: /public/inicio/home');
            exit(); // Es recomendable usar exit() después de header() para evitar que el script siga ejecutándose.
        } else {
            header('Location: /public/Registrar');
            exit();
        }
        
    }
}