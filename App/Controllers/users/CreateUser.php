<?php

use LDAP\Result;

    session_start();

    if(!empty($_POST)){

        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        require_once '../../Classes/BDD.php';
        $BaseDeDatos = new BDD("tienda");
        $sql = "SELECT * FROM usuario WHERE  correo = '".$email."'";

        $result = $BaseDeDatos->exequteQuery($sql);

        $nr = mysqli_num_rows($result);

        if($nr == 1){

            header("Location: /tienda/resorces/views/eccomerce/auth/newAccount.php");

        }

        $sql = "INSERT INTO usuario (`usuario_nombre`, `correo`, `password`) VALUES ('".$nombre."', '".$email."', '".$password."')";
        $result = $BaseDeDatos->exequteQuery($sql);

        $_SESSION['usuario'] = $email;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['admin'] = false;
        header("Location: /tienda/");




    }
    else{
        header("Location: /tienda/");
    }

?>