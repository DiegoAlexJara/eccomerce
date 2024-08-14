<?php

    session_start();
    if(!isset($_SESSION['usuario']))$_SESSION['usuario'] = 'null';
    if(!isset($_SESSION['nombre']))$_SESSION['nombre'] = 'null';  
    if($_SESSION['usuario'] == 'null' || $_SESSION['admin'] != true){

        require_once '../../../../App/Helpers/RedirecionHelpers.php'; 
        $redirecion = new RedirecionHelpers();
        $redirecion->Redirecion($_SESSION['usuario'], $_SERVER['REQUEST_URI'], $_SESSION['admin']);
    
    }
    $usuario =$_SESSION['nombre']; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../../layouts/head.php'?>
    <link rel="stylesheet" href="/tienda/public/css/adminIndex.css">
    <title>PRODUCTOS</title>
</head>
<body>
<?php  include "../../layouts/navbarAdmin.php"?>

    

</body>
</html>