<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #1a1a1a; /* Fondo oscuro */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            padding: 30px;
            background-color: #000;
            color: white;
            text-align: center;
        }

        .btn-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <h1 class="card-title">¡Bienvenido!</h1>
                    <div class="btn-container">
                        <a href="/public/Iniciar" class="btn btn-primary btn-lg">Iniciar Sesión</a>
                        <a href="/public/Registrar" class="btn btn-secondary btn-lg">Registrarse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
