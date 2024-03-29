<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="stylesheet" href="css/Registro.css">
    <title>register</title>
</head>
<body>
    
<form method="post">
    <h2>Register</h2>
    <p>Enter the data</p>
    <div class="input-wrapper">
        
        <input type="text" name="name" placeholder="Name user">
        <i class="fa-solid fa-user"></i>
    </div>

    <div class="input-wrapper">
    
    <input type="email" name="email" placeholder="Email">
    <i class="fa fa-envelope" aria-hidden="true"></i>
    </div>

    <div class="input-wrapper">
        
        <input type="password" name="password" placeholder="password">
        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
    </div>

    <input class="btn" type="submit" name="registro" value="Send">
    <a href="login.php">Long in</a>
</form>

<?php 
    include("pregistro.php");
?>

</body>
</html>