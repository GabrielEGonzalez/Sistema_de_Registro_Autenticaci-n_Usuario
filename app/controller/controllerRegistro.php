<?php

class ControllerRegistro
{

    public function __construct()
    {
        require_once(__DIR__ . '/../model/usuario.php');
    }

    public function login(): void
    {
        $usuario = new user();
        $usuario->login();
    }

    public function vistalogin(): void
    {
        require_once(__DIR__ . '/../view/auth/login.php');
    }

    public function registro(): void
    {
        $usuario = new user();
        $usuario->craerUsuario();
    }

    public function viewregistro(): void
    {
        require_once(__DIR__ . '/../view/auth/register.php');
    }


    public function home(){
        require_once(__DIR__ . '/../view/auth/home.php');
    }
}