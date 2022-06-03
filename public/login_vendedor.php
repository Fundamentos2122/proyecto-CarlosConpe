<?php
$username_err ="";
$password_err ="";
?>

<?php include '../config/database.php'; ?>
<?php include '../src/lib/php/login.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Vendedor / Gerente</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="volver_login">
    <a href="">
        <img src="img\ios-arrow-back.svg" alt="arrow_back">
        <p>Volver</p>
    </a>
</div>
<div class="logo_login">
    <img src="img\image.png" alt="logo">
</div>
<div class="form_login">
    <form class="form_login_spaces" id="login-space" method="POST" >
        <h3>Iniciar Sesión</h3>
        <input type="text" placeholder="Usuario" name="username" required>
        <span class="invalid-feedback"><?php echo $username_err; ?>
            <input type="password" placeholder="Contraseña" name="password" required>
            <span class="invalid-feedback"><?php echo $password_err; ?>
            <button type="submit" id="button-login">Iniciar Sesión</button>
    </form>
</div>
<div class="login_change_profile">
    <a href="index.php"> ¿Usuario? </a>
</div>

<script src="../src/lib/js/login.js"></script>
</body>

</html>