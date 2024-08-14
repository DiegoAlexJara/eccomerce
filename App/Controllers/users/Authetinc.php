<?php
    session_start();
    if(!empty($_POST)){
        
        $email = $_POST['email'];
        $password = $_POST['clave'];

        require_once '../../Classes/BDD.php';
        $BaseDeDatos = new BDD("tienda");
        $sql = "SELECT * FROM usuario WHERE  correo = '".$email."' and password = '".$password."'";

        $result = $BaseDeDatos->exequteQuery($sql);

        $nr = mysqli_num_rows($result);
        
        if(!$nr == 1){

            header("Location: /tienda/");

        }else{
        
            $row = $result->fetch_assoc();
            $admin = $row['is_admin'];
            if($admin==1){
            
                $admins = true;
            
            }
            else{
                $admins = false;
            }
            $nombre =$row['usuario_nombre'];

            $_SESSION['usuario'] = $email;
            $_SESSION['nombre'] = $nombre;
            $_SESSION['admin'] = $admins;
            header("Location: /tienda/");
        }

    }
    

?>