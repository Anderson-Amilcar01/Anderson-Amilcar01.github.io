<?php
include("DB/db.php");
session_start();
if (!isset($_SESSION['IDusuario'])) {
    header("Location: Location: index2.php");
    exit();
}
$loggedInUserId = $_SESSION['IDusuario'];

// Modified SQL query to select only the logged in user
$sql = " SELECT * FROM usuario WHERE IDusuario ='$loggedInUserId'";
$result = $con->query($sql);

if ($result) {
    // Obtener los resultados de la consulta
    // Get the results of the query
    $row = $result->fetch_assoc();

    // para Obtener el nombre del usuario
    // to Get the user's name
    $nombreUsuario = $row['NombreUs'];

    // Ahora, $nombreUsuario contiene el nombre del usuario que ha iniciado sesión
    // Now, $nombreUsuario contains the name of the logged in user
    echo "Welcome, $nombreUsuario!";
} else {
    // Manejar el caso en que la consulta no fue exitosa
    echo "Error en la consulta: " . $con->error;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="css/index2.css">
    <title>Proyecto repo</title>
</head>
<body>
    <header>
    <img src="cole2.jpg" alt="imagen de fondo">

    <hr>
        <a href="perfil.php"><?php echo $nombreUsuario ?></a>
        <a href="projects.php">
            <i class="fas fa-code"></i> Projects
        </a>
        <a href="Skills.php">
            <i class="fas fa-graduation-cap"></i> Skills
        </a>
        <a href="Contact.php">
            <i class="fas fa-phone"></i> Contact
        </a>
        <a href="Crs.php">close section</a>

    </header>
    <p>Hello Ardora enthusiast! We are excited to know that you share our passion for creativity and fun. If you have questions, comments, or just want to chat about gaming, we're here for you!</p>
</body>
   <script src="js/m.js"></script>
</html>
