<?php
session_start();

include 'app/conecta.php'; // Incluimos el archivo de conexión MySQLi
include 'app/Acciones.php'; // Incluimos el archivo de acciones

$acciones = new Acciones($Conecta); // Creamos una instancia de Acciones pasándole la conexión MySQLi

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $error = $acciones->login($username, $password); // Intentamos iniciar sesión con las credenciales proporcionadas
    
    if ($error) {
        header("Location: login.php?error=" . urlencode($error)); // Redirigimos de vuelta a login.php con el mensaje de error
        exit;
    }
}

if (isset($_GET['logout'])) {
    $acciones->logout(); // Manejamos el cierre de sesión si se solicita
}

if (!isset($_SESSION['user'])) {
    header("Location: login.php"); // Si no hay usuario en sesión, redirigimos a login.php
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio</title>
</head>
<body>
    <h2>Bienvenido a la página de inicio</h2>
    <p>¡Hola, <?php echo htmlspecialchars($_SESSION['user']['username']); ?>!</p>
    <p>Aquí puedes agregar contenido de tu página de inicio.</p>
    <a href="index.php?logout=true">Cerrar sesión</a>
</body>
</html>
