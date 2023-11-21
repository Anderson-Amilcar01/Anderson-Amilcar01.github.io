<?php
include("DB/db.php");
session_start();
if (!isset($_SESSION['IDusuario'])) {
    header("Location: Location: index2.php");
    exit();
}
$loggedInUserId = $_SESSION['IDusuario'];

//Handle update if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar y obtener los datos del formulario
    $nuevoNombre = mysqli_real_escape_string($con, $_POST['nuevoNombre']);
    $nuevaContrasena = mysqli_real_escape_string($con, $_POST['nuevaContrasena']);

    // Check if a new name and/or a new password is entered
    if (!empty($nuevoNombre) || !empty($nuevaContrasena)) {
        // Build the update SQL query
        $sqlUpdate = "UPDATE usuario SET";

        if (!empty($nuevoNombre)) {
            $sqlUpdate .= " NombreUs = '$nuevoNombre'";
        }

        if (!empty($nuevaContrasena)) {
            // Add a comma if a new name has already been specified
            if (!empty($nuevoNombre)) {
                $sqlUpdate .= ",";
            }
            $hashedPassword = password_hash($nuevaContrasena, PASSWORD_DEFAULT);
            $sqlUpdate .= " ContraUs = '$hashedPassword'";
        }

        $sqlUpdate .= " WHERE IDusuario = '$loggedInUserId'";

        // Execute the update query
        if (mysqli_query($con, $sqlUpdate)) {
            echo "Actualización exitosa.";
        } else {
            echo "Error en la actualización: " . mysqli_error($con);
        }
    } else {
        echo "No se proporcionaron nuevos datos para la actualización.";
    }
}

// Obtener los datos actuales del usuario
$sqlSelect = "SELECT NombreUs FROM usuario WHERE IDusuario ='$loggedInUserId'";
$result = $con->query($sqlSelect);

// Check if the query was successful
if ($result) {
    // Get the results of the query
    $row = $result->fetch_assoc();

   // Get the name of the current user
    $nombreUsuario = $row['NombreUs'];

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/chage.css">
        <title>Change</title>
    </head>
    <body>
        
    </body>
    </html>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nuevoNombre">new name:</label>
        <input type="text" name="nuevoNombre" value="<?php echo $nombreUsuario; ?>">

        <label for="nuevaContrasena">New password:</label>
        <input type="password" name="nuevaContrasena">

        <button type="submit">Change</button>
        <hr>
        <a href="perfil.php">Back</a>
    </form>
    <?php
} else {
    
    echo "Error en la consulta: " . $con->error;
}

?>
