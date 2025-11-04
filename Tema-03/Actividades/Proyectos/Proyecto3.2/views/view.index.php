<!doctype html>
<html lang="es">

<head>
    <?php
        // Cabeceras: título, metadatos, CSS, etc.
        include 'layouts/head.php';
    ?>
</head>

<body class="bg-white">
    <!-- Contenedor principal -->
    <div class="container my-4">

        <?php
            // Encabezado del sitio
            include 'partials/header.php';
        ?>

        <h1 class="mb-4">Proyecto 3.2</h1>

        <!-- Menú de navegación -->
        <?php
            include 'partials/menu.php';
        ?>

        <!-- Tabla de artículos -->
        <div class="table-responsive mt-4">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="text-end">ID</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Categoría</th>
                        <th scope="col" class="text-end">Unidades</th>
                        <th scope="col" class="text-end">Precio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articulos as $articulo): ?>
                    <tr>
                        <td class="text-end"><?php echo($articulo['id']); ?></td>
                        <td><?php echo($articulo['descripcion']); ?></td>
                        <td><?php echo($articulo['modelo']); ?></td>
                        <td><?php echo(get_categoria_nombre($articulo['categoria_id'])); ?></td>
                        <td class="text-end"><?php echo($articulo['unidades']); ?></td>
                        <td class="text-end">
                            <?php echo number_format($articulo['precio'], 2, ',', '.'); ?> €
                        </td>
                        <td>
                            <!-- Botones de acción (editar/eliminar futuramente) -->
                            <a href="eliminar.php?id=<?php echo $articulo['id'] ?>" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </a>
                            <a href="editar.php?id=<?php echo $articulo['id'] ?>" class="btn btn-sm btn-info">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="mostrar.php?id=<?= $articulo['id'] ?>" class="btn btn-sm btn-primary">
                                <i class="fa-solid fa-eye"></i>
                            </a>



                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Pie de página -->
        <?php
            include 'partials/footer.php';
        ?>

        <!-- Scripts de Bootstrap y JS -->
        <?php
            include 'layouts/javascript.php';
        ?>
    </div>
</body>

