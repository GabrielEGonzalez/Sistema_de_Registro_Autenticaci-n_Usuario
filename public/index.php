<?php

require_once(__DIR__ . '/../app/controller/controlerhome.php');
require_once(__DIR__ . '/../app/controller/controllerRegistro.php');

$url = $_SERVER['REQUEST_URI'];
$metodo = $_SERVER['REQUEST_METHOD'];


if ($url === '/public/') {
  $inicio = new Controlerhome();
  $inicio->home();
} elseif ($url === '/public/Iniciar') {
  $registro = new ControllerRegistro;
  $registro->vistalogin();
} elseif ($url === '/public/Registrar') {
  $registro = new ControllerRegistro();
  $registro->viewregistro();
} elseif ($url === '/public/inicio' && $metodo === 'POST') {
  if (isset($_POST['nombre']) && isset($_POST['Correo']) && isset($_POST['password'])) {
    $registro = new ControllerRegistro();
    $registro->registro();
  } elseif (isset($_POST['correo']) && isset($_POST['password'])) {
    $registro = new ControllerRegistro();
    $registro->login();
  }
} elseif ($url === '/public/inicio/home') {
  $inicio = new ControllerRegistro();
  $inicio->home();

} else {
  echo "Error 404";
}