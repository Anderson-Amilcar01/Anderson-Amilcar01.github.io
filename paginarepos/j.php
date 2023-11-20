<?php
include("DB/db.php");
session_start();

if (!isset($_SESSION['IDusuario'])) {
    header("Location: login.php");
    exit();
}

// Aquí va el contenido de la página después de iniciar sesión
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h2>Bienvenido</h2>
    <p>Hola, <?php echo $_SESSION['NombreUs']; ?>. Has iniciado sesión correctamente.</p>
    <a href="CrS.php">Cerrar sesión</a>
</body>
</html>
