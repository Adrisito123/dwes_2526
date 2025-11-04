<?php
include_once 'libs/funciones_articulos.php';

// Obtener ID desde GET (si existe)
$id = $_GET['id'] ?? null;

// Obtener todos los artículos
$articulos = get_tabla_articulos();

// Si hay ID, filtrar solo ese artículo
if ($id !== null && $id !== '') {
    $articulos = filtrarArticulosPorID($articulos, $id);
}

?>