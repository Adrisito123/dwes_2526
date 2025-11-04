<?php
// Modelo para ordenar artículos
include_once 'libs/funciones_articulos.php';

// Obtener criterio de ordenación desde GET
$criterio = $_GET['criterio'] ?? 'id';

// Lista de campos válidos
$campos_validos = ['id', 'descripcion', 'modelo', 'categoria_id', 'unidades', 'precio'];
if (!in_array($criterio, $campos_validos)) {
    $criterio = 'id';
}

// Obtener los artículos
$articulos = get_tabla_articulos();

// Ordenar los artículos
$articulos = ordenar($articulos, $criterio);
?>
