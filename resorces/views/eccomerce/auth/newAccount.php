<?php

    session_start();
    if(!$_SESSION['usuario']==='null'){
        require_once '../../../App/Helpers/RedirecionHelpers.php';
        $redirecion = new RedirecionHelpers();
        $sessions = $_SESSION['usuario'];
        $redirecion->Redirecion($_SESSION['usuario'], $_SERVER['REQUEST_URI'], $_SESSION['admin']);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../../layouts/head.php'?>
    <title>CUENTA NUEVA</title>
</head>
<body> 
    <h1>CREAR CUENTA</h1>
    <form action="/tienda/App/Controllers/users/CreateUser.php" method="post">
        <p>Nombre de usuario</p>
        <input type="text" name="nombre" id="nombre" placeholder="Ejemplo" required>
        <p>Correo</p>
        <input type="email" name="email" id="email" placeholder="ejemplo@gmail.com" required>
        <p>Contraseña</p>
        <input type="password" name="password" id="password" placeholder="********" required>
        <br>
        <input type="submit" value="CREAR">
    </form>
    
    <a href="/tienda/"><button>REGRESAR</button></a>
    
</body>
</html>