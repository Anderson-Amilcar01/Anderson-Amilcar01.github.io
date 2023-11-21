<?php
include("DB/db.php");
if(isset($_POST['registro'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    // Check if a user with the same email already exists
    $consulta_existencia = "SELECT * FROM usuario WHERE EmailUs = '$email'";
    $result_existencia = mysqli_query($con, $consulta_existencia);
    if (mysqli_num_rows($result_existencia) > 0) {
        ?>  <!-- // A user already exists with that email -->
        <p>The email is already registered.</p>
        <?php
    } else {
        // Insertar nuevo usuario usando prepared statement
        //Insert new user using prepared statement
        $consulta = "INSERT INTO usuario(NombreUs, ContraUs, EmailUs) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($con, $consulta);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        // Vincular parámetros y ejecutar
        // Bind parameters and execute XD
        mysqli_stmt_bind_param($stmt, "sss", $name, $hashed_password, $email);
        $result_insert = mysqli_stmt_execute($stmt);
       // Check the insert result
        if ($result_insert) {
            echo "Successful registration.";
        } else {
            echo "Error registering user.";
        }   
        mysqli_stmt_close($stmt);
    }
}
mysqli_close($con);
?>