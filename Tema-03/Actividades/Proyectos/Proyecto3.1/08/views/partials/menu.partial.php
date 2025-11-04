<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
<div class="container-fluid">
<a class="navbar-brand" href="index.php">Libros</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item"><a class="nav-link active" href="new.php">Añadir</a></li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Ordenar</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="ordenar.php?criterio=id">ID</a></li>
            <li><a class="dropdown-item" href="ordenar.php?criterio=titulo">Título</a></li>
            <li><a class="dropdown-item" href="ordenar.php?criterio=autor">Autor</a></li>
            <li><a class="dropdown-item" href="ordenar.php?criterio=genero">Género</a></li>
            <li><a class="dropdown-item" href="ordenar.php?criterio=editorial">Editorial</a></li>
            <li><a class="dropdown-item" href="ordenar.php?criterio=precio">Precio</a></li>
        </ul>
    </li>
</ul>

<!-- FORMULARIO DE BÚSQUEDA -->
<form class="d-flex" role="search" method="get" action="search.php">
    <input class="form-control me-2" type="search" name="expresion" placeholder="Buscar" required>
    <button class="btn btn-outline-success" type="submit">Buscar</button>
</form>

</div>
</div>
</nav>
