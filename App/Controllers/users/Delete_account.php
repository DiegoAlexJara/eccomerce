<?php

    session_start();
    require_once '../../Classes/BDD.php';
    $BaseDeDatos = new BDD("tienda");
    $user = $_SESSION['usuario'];
    $sql = "SELECT * FROM usuario WHERE correo = '".$user."'";
    $result = $BaseDeDatos->exequteQuery($sql);
    $nr = mysqli_num_rows($result);
        
    if(!$nr == 1){

        header("Location: /tienda/");

    }

    $sql = "DELETE FROM usuario WHERE correo = '".$user."'";
    $result = $BaseDeDatos->exequteQuery($sql);

    $sql = "SELECT * FROM usuario WHERE correo = '".$user."'";
    $result = $BaseDeDatos->exequteQuery($sql);
    $nr = mysqli_num_rows($result);
        
    if($nr == 1){

        header("Location: /tienda/");

    }  
    session_start();

    $_SESSION = array();

    session_destroy();
    header("Location: /tienda/")
 
    
    
?>