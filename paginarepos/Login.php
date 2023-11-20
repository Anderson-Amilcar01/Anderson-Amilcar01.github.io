<?php

include("DB/db.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NombreUs = $_POST['NombreUs'];
    $ContraUs = $_POST['ContraUs'];

    $stmt = $con->prepare("SELECT IDusuario, ContraUs FROM usuario WHERE NombreUs = ?");
    $stmt->bind_param("s", $NombreUs);
    $stmt->execute();
    $stmt->bind_result($IDusuario, $hashed_password);
    $stmt->fetch();
    $stmt->close();

    if ($hashed_password && password_verify($ContraUs, $hashed_password)) {
        $_SESSION['IDusuario'] = $IDusuario;
        header("Location: j.php");
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="css/clogin.css">
    <title>login</title>
</head>
<body>
    <h2>Login:</h2>
    <?php if(isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form action="login.php" method="post">
     <i class="fa-solid fa-user"></i>
        <label for="NombreUs">Usuario:</label>
        <input type="text" name="NombreUs" required>

        <i class="fa-solid fa-unlock"></i>
        <label for="ContraUs">Contraseña:</label>
        <input type="password" name="ContraUs" required>

        <button type="submit">Iniciar sesión</button>
        <a href="Registro.php">create Account</a>
    </form>
</body>
</html>
