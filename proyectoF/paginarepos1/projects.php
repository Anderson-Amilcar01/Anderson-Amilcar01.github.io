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
    <link rel="stylesheet" href="css/proyects.css">
    <title>Proyects</title>
</head>
<body>
    <header>
        <img class="logo" src="assets/house.svg" alt="Menu">
       <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
       <nav class="nav" id="nav">
           <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
           <ul class="nav-list">
           <li><a href="perfil.php"><?php echo $nombreUsuario ?></a></li>
                <li><a href="index2.php">Home</a></li>
                <li><a href="Skills.php">skills</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div>
        <h1>Anderson Amilcar Escobar Reyes</h1>
        <a href="https://github.com/Anderson-Amilcar01/Anderson-Amilcar01.github.io/tree/main/Anderson-Amilcar01.github.io/Tperiodica">Table Elements</a>
        <a href="https://anderson-amilcar01.github.io/JuegoGF/JuegoGF.htm">War</a>
    </div>
    <div>
        <h1>Javier Vanegas</h1>
        <p>within the link are the two games</p>
        <a href="https://rodrigoflores567.github.io/Paquete_biologia/index.htm">Biology game series</a>
    </div>
    <div>
        <h1>Tiffany</h1>
        <a href="https://nitiffa16.github.io/teoria%20de_darwin/Teoria_Darwin.htm">games ardora</a>
        <a href="https://tirsa-31.github.io/MultiGames/MultiGames.htm">Multi games</a>
    </div>

    <div>
        <h1>Melanie Hernandez</h1>
        <a href="https://github.com/IgnaGuzmn/Mesa3.github.io">games ardora of Melanie</a>
    </div>
    <script src="js/m.js"></script>
</body>
</html>