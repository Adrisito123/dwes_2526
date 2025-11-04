<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
<div class="container-fluid">
    <a class="navbar-brand" href="index.php">Artículos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- Botón Añadir -->
            <li class="nav-item">
                <a class="nav-link active" href="new.php">Añadir</a>
            </li>

            <!-- Dropdown Ordenar -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Ordenar</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="ordenar.php?criterio=id">ID</a></li>
                    <li><a class="dropdown-item" href="ordenar.php?criterio=descripcion">Descripción</a></li>
                    <li><a class="dropdown-item" href="ordenar.php?criterio=modelo">Modelo</a></li>
                    <li><a class="dropdown-item" href="ordenar.php?criterio=categoria_id">Categoría</a></li>
                    <li><a class="dropdown-item" href="ordenar.php?criterio=unidades">Unidades</a></li>
                    <li><a class="dropdown-item" href="ordenar.php?criterio=precio">Precio</a></li>
                </ul>
            </li>
        </ul>

        <!-- FORMULARIO DE BÚSQUEDA POR ID -->
        <form class="d-flex" role="search" method="get" action="buscar.php">
            <input class="form-control me-2" type="number" name="id" placeholder="Buscar por ID" value="<?= ($_GET['id'] ?? '') ?>" required>
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
    </div>
</div>
</nav>
