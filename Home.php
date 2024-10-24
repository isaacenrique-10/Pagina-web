<?php
session_start();
include 'Catalogo.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Motos de Chuki-Tadeo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">¡Bienvenido, <?php echo $_SESSION['username']; ?>!</h1>
                <p class="lead">Has iniciado sesión correctamente en tu cuenta.</p>

                <!-- Tarjetas de motos con imágenes -->
                <div class="row mt-4">
                    <?php
                    foreach ($motos as $moto) {
                        echo '
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm">
                                <img src="' . $moto['imagen'] . '" class="card-img-top" alt="Imagen de ' . $moto['nombre'] . '">
                                <div class="card-body">
                                    <h5 class="card-title">' . $moto['nombre'] . '</h5>
                                    <p class="card-text">' . $moto['descripcion'] . '</p>
                                    <p class="card-text"><strong>Precio: </strong>' . $moto['precio'] . '</p>
                                    <a href="detalles.php?moto=' . urlencode($moto['nombre']) . '" class="btn btn-primary">Ver más</a>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>
                </div>

                <div class="mt-4">
                    <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
