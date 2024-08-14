<?php

if(empty($_GET)){

    header("Location: /tienda/resorces/views/admin/modules/users.php");

}

$usuario_id = $_GET['usuario'];

require_once '../../Classes/BDD.php';
$BaseDeDatos = new BDD("tienda");

$sql = "DELETE FROM usuario WHERE correo = '".$usuario_id."'";
$result = $BaseDeDatos->exequteQuery($sql);

header("Location: /tienda/resorces/views/admin/modules/users.php");

?>