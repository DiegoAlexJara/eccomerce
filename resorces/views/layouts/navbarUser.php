<header class="site-header">
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  
  <div class="container-fluid">
    
    <a class="navbar-brand" href="/tienda/">
      <img src="/tienda/public/img/Admin.jpg" alt="Logo" width="40" height="30" class="d-inline-block align-text-top"><?php echo $usuario ?>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/tienda/resorces/views/eccomerce/modules/products.php">PRODUCTOS</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">CARRITO</a>
        </li>

        <li class="nav-item">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </li>
        
      </ul>
      <ul>
      <li class="nav-item">
        <select onclick="redirigir(this)">
          
          <option value="" disabled selected hidden>OPCIONES DE CUENTA</option>
          <br>
          <option value="modificar">MODIFICAR CUENTA</option>
          <br>
          <option value="eliminar">ELIMINAR CUENTA</option>
          <option value="salir">SALIR</option>
          </select>
        </li> 
      </ul>
    </div>
  </div>
</nav>
    </header>
    <script src="/tienda/public/js/crudUser.js"></script>