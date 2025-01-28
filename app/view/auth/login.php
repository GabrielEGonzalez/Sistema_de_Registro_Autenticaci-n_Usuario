

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/../../../public/css/estilonav.css">
</head>
<body>
    <div class="contenedor">
    <form action="/public/Registrar" class="" method="POST">
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
</body>
</html>
