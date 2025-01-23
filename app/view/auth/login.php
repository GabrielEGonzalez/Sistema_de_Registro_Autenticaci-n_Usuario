<?php
require_once(__DIR__ . '/../layouts/header.php');
?>
<div class="contenedor">
    <form action="" class="">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="ingrese nombre">

        <label for="Correo">Correo Electronico:</label>
        <input type="email" name="Correo" id="Correo" placeholder="ingrese Correo Electronico">

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" placeholder="ingrese Contraseña">

        <input type="submit" value="Enviar">
    </form>
</div>