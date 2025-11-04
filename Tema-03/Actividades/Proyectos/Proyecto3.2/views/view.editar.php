<!doctype html>
<html lang="es">
<head>
    <?php include 'layouts/head.php'; ?>
</head>
<body class="bg-white">
<div class="container my-4">
    <?php include 'partials/header.php'; ?>

    <main>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?= $articulo['id'] ?>">

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?= $articulo['descripcion'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo:</label>
                <input type="text" name="modelo" id="modelo" class="form-control" value="<?= $articulo['modelo'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="categoria_id" class="form-label">Categoría:</label>
                <select name="categoria_id" id="categoria_id" class="form-select" required>
                    <option disabled>Seleccione una categoría</option>
                    <?php foreach ($categorias as $categoria): ?>
                        <option value="<?= $categoria['id'] ?>" <?= $categoria['id'] == $articulo['categoria_id'] ? 'selected' : '' ?>>
                            <?= $categoria['nombre'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="unidades" class="form-label">Unidades:</label>
                <input type="number" name="unidades" id="unidades" class="form-control" min="0" value="<?= $articulo['unidades'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio (€):</label>
                <input type="number" name="precio" id="precio" class="form-control" step="0.01" min="0" value="<?= $articulo['precio'] ?>" required>
            </div>

            <div class="d-flex gap-2">
                <a href="index.php" class="btn btn-secondary">Volver</a>
                <button type="reset" class="btn btn-warning">Limpiar</button>
                <button type="submit" class="btn btn-primary">Actualizar articulo</button>
            </div>
        </form>
    </main>

    <?php include 'partials/footer.php'; ?>
    <?php include 'layouts/javascript.php'; ?>
</div>
</body>
</html>
