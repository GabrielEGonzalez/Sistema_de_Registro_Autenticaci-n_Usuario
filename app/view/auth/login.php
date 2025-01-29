<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            width: 200px;
            margin: 0 auto;
            margin-top: 100px;
        }
        input{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form action="/public/inicio" method="POST">
        <input type="text" name="correo" placeholder="Correo">
        <input type="password" name="password" placeholder="Contraseña">
        <button type="submit">Iniciar</button>
    </form>
</body>
</html>