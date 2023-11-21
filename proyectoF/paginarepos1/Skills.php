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
    <link rel="stylesheet" href="css/skills.css">
    <title>Document</title>
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
                <li><a href="index2.php">Home</a></li>
                <li><a href="Contact.php">Contact</a></li>
    </header>
        <div>
        <h1>Javier Vanegas</h1>
        <p>I am Javier I really like and I enjoy to make videogames interactives in Ardora, is entertaining even is better if is for something that can help to other people. Also I like to use html, css and exlearning. I´m interested in learning more about this world and create new spaces.</p>
        </div>
    <div>
        <h1>Anderson Escobar</h1>
        <p>The ability I have is to communicate with others and understand the code</p>
        
    </div>
    
    <div>
        <h1>Melanie Hernandez</h1>
        <p>I am good like Scrum Master</p>
    </div>

    <div>
        <h1>Tiffany</h1>
        <p>I am good in html</p>
    </div>
    
    <script src="js/m.js"></script>
</body>
</html>