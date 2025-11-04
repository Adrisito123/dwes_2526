<!doctype html>
<html lang="es">
<head>
    <?php include __DIR__ . '/layouts/head.layouts.php'; ?>
    <title>Mostrar Libro</title>
</head>
<body class="bg-white">
<div class="container my-4">
    <?php include __DIR__ . '/partials/header.partial.php'; ?>
    <?php include __DIR__ . '/partials/menu.partial.php'; ?>

    <main>
        <legend>Detalles del Libro</legend>

        <form>
            <div class="mb-3">
                <label>ID:</label>
                <input type="text" class="form-control" value="<?= $libro['id']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label>Título:</label>
                <input type="text" class="form-control" value="<?= $libro['titulo']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label>Autor:</label>
                <input type="text" class="form-control" value="<?= $libro['autor']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label>Género:</label>
                <input type="text" class="form-control" value="<?= $libro['genero']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label>Editorial:</label>
                <input type="text" class="form-control" value="<?= $libro['editorial']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label>Precio:</label>
                <input type="text" class="form-control" value="<?= number_format($libro['precio'], 2, ',', '.'); ?>" readonly>
            </div>

            <a class="btn btn-secondary" href="index.php">Volver</a>
            <a class="btn btn-secondary" href="index.php">Volver al listado</a>
        </form>
    </main>
</div>

<?php include __DIR__ . '/partials/footer.partial.php'; ?>
<?php include __DIR__ . '/layouts/js_bootstrap.layout.php'; ?>
</body>
</html>
