<?php
    session_start();
    require_once 'App/Helpers/RedirecionHelpers.php'; 
    if(!isset($_SESSION['usuario'])|| $_SESSION['usuario']=="null")$_SESSION['usuario'] = 'null';
if(!isset($_SESSION['nombre']))$_SESSION['nombre'] = 'null';
    $redirecion = new RedirecionHelpers();
    $redirecion->Redirecion($_SESSION['usuario'], $_SERVER['REQUEST_URI'], $_SESSION['admin']);
    $usuario =$_SESSION['nombre']; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../Tienda/resorces/views/layouts/head.php'?>
    <title>INICIO</title>
    <link rel="stylesheet" href="public/css/adminIndex.css">
</head>
<body>
    <?php  include "resorces/views/layouts/navbarUser.php"?>
    <a href="resorces/views/auth/login.php"></a>
</body>
</html>
