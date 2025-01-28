<?php

require_once (__DIR__ . '/../app/controller/controlerhome.php');
require_once(__DIR__ . '/../app/controller/controllerRegistro.php');
$url = $_SERVER['REQUEST_URI'];
$metodo = $_SERVER['REQUEST_METHOD'];


if($url === '/public/'){
  $inicio = new Controlerhome();
  $inicio->home();
}elseif($url === '/public/Iniciar'){
  $registro = new ControllerRegistro;
  $registro->login();
}elseif($url === '/public/Registrar'){
    $usuario = $_POST['nombre'];
    $correo = $_POST['Correo'];
    $pass = $_POST['password'];

    echo " ".$usuario ."</br> ".$correo . "</br> ".$pass;
}

