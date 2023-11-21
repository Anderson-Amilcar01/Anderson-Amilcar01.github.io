<?php
session_start();
session_destroy(); // Cierra la sesión
header("Location: Login.php"); // Redirige a la página de inicio de sesión
exit();
?>
