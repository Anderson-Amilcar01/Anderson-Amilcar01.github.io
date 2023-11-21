<?php
$host = "localhost";
$us = "root";
$contr = "";
$bd = "repo";

$con = new mysqli($host, $us, $contr, $bd);

if ($con->connect_error) {
    die("Conexión fallida: " . $con->connect_error);
}
?>