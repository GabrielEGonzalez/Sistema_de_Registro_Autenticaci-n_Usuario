<?php

require_once (__DIR__ . '/../app/controller/controlerhome.php');

$url = $_SERVER['REQUEST_URI'];
$metodo = $_SERVER['REQUEST_METHOD'];


if($url === '/public'){
  $inicio = new Controlerhome();
  $inicio->home();
}

