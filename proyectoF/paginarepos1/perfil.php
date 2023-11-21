<?php
include("DB/db.php");
session_start();
if (!isset($_SESSION['IDusuario'])) {
    header("Location: login.php");
    exit();
}
$loggedInUserId = $_SESSION['IDusuario'];

$sql = "SELECT NombreUs, EmailUs FROM usuario WHERE IDusuario = '$loggedInUserId'";
$result = $con->query($sql);


if ($result) {
    // Obtener los resultados de la consulta
    $row = $result->fetch_assoc();

    // Obtener el nombre y el correo electrónico del usuario
    $nombreUsuario = $row['NombreUs'];
    $emailUsuario = $row['EmailUs'];


    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/perfil.css">
        <title>Perfil de Usuario</title>
    </head>
    <body>
    <header>
    <img src="perfil.jpg" alt="imagen de fondo">
    </header>
        
        <h2>Welcome, <?php echo $nombreUsuario; ?>!</h2>
        <p>Email: <?php echo $emailUsuario; ?></p>

        <hr>
        <a href="index2.php">Back home</a>
        <hr>
        <a href="USUARIO.php">Change password and username</a>
        <hr>
        <a href="Crs.php">Sign off</a>

    </body>
    </html>
    <?php
} else {
    echo "Error en la consulta: " . $con->error;
}
?>
