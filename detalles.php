<?php
// Incluir el catálogo para obtener los detalles de las motos
include 'Catalogo.php';

// Obtener el nombre de la moto desde la URL
$motoNombre = isset($_GET['moto']) ? $_GET['moto'] : '';

// Buscar los detalles de la moto seleccionada
$motoSeleccionada = null;
foreach ($motos as $moto) {
    if ($moto['nombre'] === $motoNombre) {
        $motoSeleccionada = $moto;
        break;
    }
}

// Verificar si se encontró la moto
if (!$motoSeleccionada) {
    echo "Moto no encontrada.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de <?php echo $motoSeleccionada['nombre']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1><?php echo $motoSeleccionada['nombre']; ?></h1>
                <img src="<?php echo $motoSeleccionada['imagen']; ?>" alt="Imagen de <?php echo $motoSeleccionada['nombre']; ?>" class="img-fluid mb-4">
                <p><strong>Descripción:</strong> <?php echo $motoSeleccionada['descripcion']; ?></p>
                <p><strong>Precio:</strong> <?php echo $motoSeleccionada['precio']; ?></p>
                
                <!-- Características detalladas de la moto -->
                <?php if ($motoSeleccionada['nombre'] == 'MT-09') { ?>
                    <h5>Características de la Yamaha MT-09:</h5>
                    <ul>
                        <li>Motor: 847 cc</li>
                        <li>Potencia: 115 CV</li>
                        <li>Peso: 193 kg</li>
                        <li>Sistema de frenos ABS</li>
                        <li>Sistema de control de tracción</li>
                    </ul>
                <?php } elseif ($motoSeleccionada['nombre'] == 'Duke 1290') { ?>
                    <h5>Características de la KTM Duke 1290:</h5>
                    <ul>
                        <li>Motor: 1,301 cc</li>
                        <li>Potencia: 177 CV</li>
                        <li>Peso: 195 kg</li>
                        <li>Suspensión WP de alta gama</li>
                        <li>Sistema de control de estabilidad</li>
                    </ul>
                <?php } elseif ($motoSeleccionada['nombre'] == 'BMW 1000CR') { ?>
                    <h5>Características de la BMW 1000CR:</h5>
                    <ul>
                        <li>Motor: 999 cc</li>
                        <li>Potencia: 205 CV</li>
                        <li>Peso: 197 kg</li>
                        <li>Sistema Dynamic Damping Control (DDC)</li>
                        <li>Pantalla TFT a color</li>
                    </ul>
                <?php } ?>

                <a href="Home.php" class="btn btn-primary mt-4">Volver al catálogo</a>
            </div>
        </div>
    </div>
</body>
</html>
