<?php
    
    session_start();
    if(!isset($_SESSION['usuario'])){$_SESSION['usuario']="null";}
    if(!isset($_SESSION['admin'])){$_SESSION['admin']=false;}
    require_once '../../../../App/Helpers/RedirecionHelpers.php';
    $redirecion = new RedirecionHelpers();
    $sessions = $_SESSION['usuario'];
    $redirecion->Redirecion($_SESSION['usuario'], $_SERVER['REQUEST_URI'], $_SESSION['admin']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN</title>
    <?php include '../../layouts/head.php'?>
    <link rel="stylesheet" href="/tienda/public/css/login.css">
</head>
<body>
    <div class="container">

        <form action="/tienda/App/Controllers/users/Authetinc.php" method="post">

            <label for="username">CORREO</label>
            <input type="email" value="" id="email" name="email" placeholder="correo@gmail.com" required>
            <br>
            <label for="password">CONTRASEÑA</label>
            <input type="password" value="" id="clave" name="clave" placeholder="******" required>
            <br>
            <input type="submit" value="INGRESAR">

            <a href="/tienda/resorces/views/eccomerce/auth/newAccount.php"><p>crear cuenta</p></a>

        </form>
    
    </div>
</body>
</html>