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
    <title>USUARIOS</title>
    <link rel="stylesheet" href="/tienda/public/css/adminUsers.css">
</head>
<body>
    <?php  include "../../layouts/navbarAdmin.php"?>
    <br><br><br><br>
    <div class="container">
    <table class="table">
        
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">CORREO</th>
                <th scope="col">PASSWORD</th>
                <th scope="col">ADMIN</th>
                
            </tr>
        </thead>
    
        <tbody>
            <?php

                require_once "../../../../App/Classes/BDD.php";
                $Conexion = new BDD("tienda");
                $sql = "SELECT * FROM usuario";
                $resultado = $Conexion->exequteQuery($sql);
                while($row = mysqli_fetch_array($resultado)){

            ?>
            <tr>
                <th scope="row"> 
                    <?php
                            echo $row['usuario_id']
                    ?>
                </th>
                <td>
                    <?php
                        echo $row['usuario_nombre'];
                    ?>
                </td>
                <td>
                    <?php
                        echo $row['correo'];
                        $usuarios = $row['correo'];
                    ?>
                </td>
                <td>
                    <?php
                        echo $row['password'];
                    ?>
                </td>
                <td>
                    <?php  
                        if($row['is_admin']){
                            echo "true";
                        }
                        else{
                            echo "false";
                        }
                    ?>
                    </td>
                <td><div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ACCIONES
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">MODIFICAR</a></li>
                        <li><a class="dropdown-item" href="/tienda/App/Controllers/admin/DeleteUsers.php?usuario=<?php echo $usuarios; ?>">ELIMINAR</a></li>
                    </ul>
                </div></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</body>
</html>