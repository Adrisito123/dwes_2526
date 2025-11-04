<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado de Artículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">Listado de Artículos</h1>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Descripción</th>
                    <th>Modelo</th>
                    <th>Categoría</th>
                    <th>Unidades</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($articulos)): ?>
                <?php foreach($articulos as $articulo): ?>
                <tr>
                    <td><?= $articulo['id'] ?></td>
                    <td><?= $articulo['descripcion'] ?></td>
                    <td><?= $articulo['modelo'] ?></td>
                    <td><?= get_categoria_nombre($articulo['categoria_id']) ?></td>
                    <td><?= $articulo['unidades'] ?></td>
                    <td><?= $articulo['precio'] ?> €</td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">No hay artículos para mostrar.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="d-flex gap-2">
            <a href="index.php" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</body>

</html>