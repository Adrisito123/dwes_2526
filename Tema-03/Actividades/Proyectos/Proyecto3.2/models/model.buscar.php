<?php
include_once 'libs/funciones_articulos.php';

// Obtener ID desde GET
$id = $_GET['id'] ?? null;

// Obtener todos los artículos
$articulos = get_tabla_articulos();

// Filtrar por ID si se pasó
if ($id !== null && $id !== '') {
    $articulos = filtrarArticulosPorID($articulos, $id);
}
?>