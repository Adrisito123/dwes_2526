<?php
$criterio = $_GET['criterio'] ?? 'id';  // Por defecto ordenamos por ID
$libros = get_tabla_libros();
$libros = ordenar($libros, $criterio);
?>
