<!doctype html>
<html lang="es">
<head>
<?php include __DIR__ . '/layouts/head.layouts.php'; ?>
<title>Nuevo Libro</title>
</head>
<body class="bg-white">
<div class="container my-4">
<?php include __DIR__ . '/partials/header.partial.php'; ?>

<main>
<legend>Formulario Nuevo Libro</legend>
<form action="create.php" method="post">
<div class="mb-3"><label>ID:</label><input type="number" class="form-control" name="id" required></div>
<div class="mb-3"><label>Título:</label><input type="text" class="form-control" name="titulo" required></div>
<div class="mb-3"><label>Autor:</label><input type="text" class="form-control" name="autor" required></div>
<div class="mb-3"><label>Género:</label><input type="text" class="form-control" name="genero" required></div>
<div class="mb-3"><label>Editorial:</label><input type="text" class="form-control" name="editorial" required></div>
<div class="mb-3"><label>Precio:</label><input type="number" step="0.01" class="form-control" name="precio" required></div>
<a class="btn btn-secondary" href="index.php">Volver</a>
<button type="reset" class="btn btn-secondary">Reset</button>
<button type="submit" class="btn btn-primary">Añadir Libro</button>
</form>
</main>
</div>
<?php include __DIR__ . '/partials/footer.partial.php'; ?>
<?php include __DIR__ . '/layouts/js_bootstrap.layout.php'; ?>
</body>
</html>
