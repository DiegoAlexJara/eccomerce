<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/tienda/public/css/adminIndex.css">
    <?php include 'head.php'?>
</head>
<body> 

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  
  <div class="container-fluid">
    
    <a class="navbar-brand" href="#">
      <img src="/tienda/public/img/Admin.jpg" alt="Logo" width="40" height="30" class="d-inline-block align-text-top">admin
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        
        <li>
        <select onclick="redirigir(this)">
          
          <option value="" disabled selected hidden> <?php echo $usuario ?></option>
          <br>
          <option value="modificar">MODIFICAR CUENTA</option>
          <br>
          <option value="eliminar">ELIMINAR CUENTA</option>
          <option value="salir">SALIR</option>
          </select>
        </li> 
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</body>
</html>