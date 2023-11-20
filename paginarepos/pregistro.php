<?php
include("DB/db.php");

if(isset($_POST['registro'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Verificar si ya existe un usuario con el mismo correo electrónico
    $consulta_existencia = "SELECT * FROM usuario WHERE EmailUs = '$email'";
    $result_existencia = mysqli_query($con, $consulta_existencia);

    if (mysqli_num_rows($result_existencia) > 0) {
        ?>
       <!-- // Ya existe un usuario con ese correo electrónico -->
        <p>El correo electrónico ya está registrado.</p>
        <?php
    } else {
        // Insertar nuevo usuario usando prepared statement
        $consulta = "INSERT INTO usuario(NombreUs, ContraUs, EmailUs) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($con, $consulta);

        // Hash de la contraseña
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Vincular parámetros y ejecutar
        mysqli_stmt_bind_param($stmt, "sss", $name, $hashed_password, $email);
        $result_insert = mysqli_stmt_execute($stmt);

        // Verificar el resultado de la inserción
        if ($result_insert) {
            echo "Registro exitoso.";
        } else {
            echo "Error al registrar el usuario.";
        }

        // Cerrar el statement
        mysqli_stmt_close($stmt);
    }
}

// Cerrar la conexión
mysqli_close($con);
?>