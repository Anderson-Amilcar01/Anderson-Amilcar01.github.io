<?php
include("DB/db.php");
session_start();
if (!isset($_SESSION['IDusuario'])) {
    header("Location: Location: index2.php");
    exit();
}

$loggedInUserId = $_SESSION['IDusuario'];

$sql = " SELECT * FROM usuario WHERE IDusuario ='$loggedInUserId'";
$result = $con->query($sql);

if ($result) {
  
    $row = $result->fetch_assoc();

    $nombreUsuario = $row['NombreUs'];
} else {
    echo "Error en la consulta: " . $con->error;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/Cont.css">
    <title>Contacts</title>
</head>
<body>
    <header>
        <img class="logo" src="assets/house.svg" alt="Menu">
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
            <ul class="nav-list">
            <li><a href="perfil.php"><?php echo $nombreUsuario ?></a></li>
                 <li><a href="projects.php">Projects</a></li>
                 <li><a href="Skills.php">Skills</a></li>
                 <li><a href="index2.php">Home</a></li>
    </header>

    <div class="M1">
        <h1>Javier Vanegas</h1>
        <p>Hello Ardora game enthusiast! We're thrilled to know that you share our passion for creativity and fun. If you have questions, comments, or just want to chat about games, we're here for you!</p>
        <h1>Email:</h1>
        <p>xavyhenriquez13@gmail.com</p>
    </div>
    <div class="M2">
        <h1>Anderson Escobar</h1>
        <p>Hi</p>
        <h1>Email:</h1>
        <p>andersonamilcarescobarreyes@gmail.com</p>
    </div>
    
    <div>
        <h1>Melanie Hernandez</h1>
        <p>Hello Ardora game enthusiast! We're thrilled to know that you share our passion for creativity and fun. If you have questions, comments, or just want to chat about games, we're here for you!</p>
        <h1>Email:</h1>
        <p>hernadezcortezmelamie29@gmail.com</p>
    </div>

    <div>
        <h1>Tiffany</h1>
        <p>Hello Ardora game enthusiast! We're thrilled to know that you share our passion for creativity and fun. If you have questions, comments, or just want to chat about games, we're here for you!</p>
        <H1>Email:</H1>
        <p>tffnhernan@gmail.com</p>
    </div>
    <script src="js/m.js"></script>
</body>
</html>