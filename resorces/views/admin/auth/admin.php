<?php

    session_start();  
    require_once '../../../../App/Helpers/RedirecionHelpers.php'; 
    if(!isset($_SESSION['usuario']))$_SESSION['usuario'] = 'null';
    if(!isset($_SESSION['nombre']))$_SESSION['nombre'] = 'null';
    $redirecion = new RedirecionHelpers();
    $redirecion->Redirecion($_SESSION['usuario'], $_SERVER['REQUEST_URI'], $_SESSION['admin']);
    $usuario =$_SESSION['nombre']; 
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADMINISTRADOR</title>
    <?php include '../../layouts/head.php'?>
    <link rel="stylesheet" href="/tienda/public/css/adminIndex.css">
</head>
<body>
    <?php  include "../../layouts/navbarAdmin.php"?>
</body>
</html>     