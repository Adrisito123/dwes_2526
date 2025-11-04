<?php
/*
    Modelo: model.eliminar.php
    Descripción: Eliminar un articulo del array según su ID
    Autor: Adrián Aránegas Molina
*/
require_once 'libs/funciones_articulos.php';

$id = $_GET['id'] ?? null;

$articulos = get_tabla_articulos();

$articulos = eliminarArticulo($articulos, $id);

?>
