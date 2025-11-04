<?php
include 'libs/funciones_articulos.php';

// Obtener todos los artículos
$articulos = get_tabla_articulos();

// Obtener categorías
$categorias = get_tabla_categorias();

// Recibir ID del artículo por GET
$id = $_GET['id'] ?? null;

foreach ($articulos as $articulo) {
    if ($articulo['id'] == $id) {
        $articulo = $articulo;
        break;
    }
}

?>
