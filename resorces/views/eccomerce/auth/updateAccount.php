<?php

    session_start();
    if($_SESSION['usuario']==='null'){
        require_once '../../../App/Helpers/RedirecionHelpers.php';
        $redirecion = new RedirecionHelpers();
        $sessions = $_SESSION['usuario'];
        $redirecion->Redirecion($_SESSION['usuario'], $_SERVER['REQUEST_URI'], $_SESSION['admin']);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR CUENTA</title>
</head>
<body>

    <h1>MODIFICAR</h1>

    <form action="" method="post">

    </form>

    
    
    <a href="/tienda/"><button>REGRESAR</button></a>

    <script></script>

    
</body>
</html>