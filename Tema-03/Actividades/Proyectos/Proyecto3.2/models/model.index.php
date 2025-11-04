<?php
// Asegurarse de que las funciones estén disponibles
include 'libs/funciones_articulos.php';

// Obtener los artículos desde las funciones simuladas
$articulos = get_tabla_articulos();

// (Opcional) Puedes también cargar las categorías si las necesitas en otras partes
$categorias = get_tabla_categorias();
?>
