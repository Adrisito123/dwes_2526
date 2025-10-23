<?php
/*
    Modelo: model.delete.php
    Descripción: Eliminar un libro del array según su ID
    Autor: Adrián Aránegas Molina
*/

$id = $_GET['id'] ?? null;

$libros = get_tabla_libros();

$libros = eliminar($libros, $id);

?>
