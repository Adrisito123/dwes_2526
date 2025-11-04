<!doctype html>
<html lang="es">
<head>
<?php include __DIR__ . '/layouts/head.layouts.php'; ?>
<title>Tabla Libros</title>
</head>
<body class="bg-white">
<div class="container my-4">
<?php include __DIR__ . '/partials/header.partial.php'; ?>
<?php include __DIR__ . '/partials/menu.partial.php'; ?>

<h2 class="fs-4 fw-semibold mb-3">Tabla Libros</h2>
<table class="table table-striped align-middle">
<thead class="table-light">
<tr>
<th>ID</th><th>Título</th><th>Autor</th><th>Género</th><th>Editorial</th><th class="text-end">Precio</th><th class="text-center">Acciones</th>
</tr>
</thead>
<tbody>
<?php foreach ($libros as $indice => $libro): ?>
<tr>
<td class="text-end"><?php echo $libro['id']?></td>
<td><?php echo $libro['titulo']?></td>
<td><?php echo $libro['autor']?></td>
<td><?php echo $libro['genero']?></td>
<td><?php echo $libro['editorial']?></td>
<td class="text-end"><?php echo number_format($libro['precio'], 2, ',', '.')?></td>
<td class="text-center">
<a href="mostrar.php?id=<?php echo $libro['id']?>" class="btn btn-sm btn-success"><i class="fa-solid fa-eye"></i></a>
<a href="delete.php?id=<?php echo $libro['id']?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
<a href="edit.php?id=<?php echo $libro['id']?>" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
<?php include __DIR__ . '/partials/footer.partial.php'; ?>
<?php include __DIR__ . '/layouts/js_bootstrap.layout.php'; ?>
</body>
</html>
