<?php

/*
    modelo:model.edit.php
    Descripcion:Modelo para la edicióon de resgistros
    Autor: Adrián Aránegs Molina

*/

// Cargo el id del libro que voy a editar
$id = $_GET['id'] ?? null; 

// Cargar el array libros
$libros = get_tabla_libros();

//Obetener el indice del libro
// CAMBIADO: Usamos la nueva función para obtener el índice.
$indice_libro = buscar_indice($libros , $id);

if($indice_libro !== null){
    // Ahora $indice_libro es un INTEGER, y la indexación es correcta.
    $libro = $libros[$indice_libro];
} else{
    echo "ERROR: Libro no encontrado";
    exit();
}
?>