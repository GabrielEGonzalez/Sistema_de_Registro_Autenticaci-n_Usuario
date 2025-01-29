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
    $registro = new ControllerRegistro();
    $registro->registro();
}elseif($url === '/public/inicio'){
    echo "Usuario creado";
}else{
    echo "Error 404";
}