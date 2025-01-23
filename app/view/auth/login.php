<?php
require_once(__DIR__ . '/../layouts/header.php');
?>
<div class="contenedor">
    <div>
        <h2>Unete a nosotros</h2>
    </div>
    <form action="" class="">
        <label for="nombre">Usuario:</label>
        <div class="icon-contenedor">
            <i class="fa-regular fa-user"></i>
            <input type="text" name="nombre" id="nombre" placeholder="ingrese nombre">
        </div>
        

        <label for="Correo">Correo Electronico:</label>
        <div class="icon-contenedor">
            <i class="fa-solid fa-at"></i>
            <input type="email" name="Correo" id="Correo" placeholder="correo@gmail.com">
        </div>

        <label for="password">Contraseña:</label>
        <div class="icon-contenedor">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="*********">
        </div>

        <input type="submit" value="Registrar">

        <a href="">Ya tienes cuenta? Inicia sesion</a>
    </form>
</div>