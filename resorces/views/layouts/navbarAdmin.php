<header class="site-header">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">

        <div class="container-fluid">

            <a class="navbar-brand" href="/tienda/">
                <img src="/tienda/public/img/Admin.jpg" alt="Logo" width="40" height="30"
                    class="d-inline-block align-text-top">admin
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=""></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="/tienda/resorces/views/admin/modules/users.php">USUARIOS</a>
                    </li>

                    <li class="nav-item">
                        <div class="btn-group-vertical" role="group" aria-label="Grupo de botones verticales">

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    CATALOGOS
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">MARCAS</a></li>
                                    <li><a class="dropdown-item" href="#">CATEGORIAS</a></li>
                                    <li><a class="dropdown-item" href="#">Sub CATEGORIAS</a></li>
                                    <li><a class="dropdown-item" href="#">PRODUCTOS</a></li>
                                </ul>
                            </div>

                        </div>
                       
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="/tienda/resorces/views/admin/modules/users.php">CONTACTOS</a>
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