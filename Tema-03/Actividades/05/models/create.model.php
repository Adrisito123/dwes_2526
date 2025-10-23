<?php

/*
    controlador:create.model.php
    Descripcion:Añadir el nuevo libro al aaray libro
    Autor: Adrián Aránegs Molina

    Método Post:
    - id
    - titulo
    - autor
    - genero
    - editorial
    - precio

*/

//Obetenemos los datos del formulario
$id = $_POST['id'] ?? null;
$titulo = $_POST['titulo'] ?? null;
$autor = $_POST['autor'] ?? null;
$genero = $_POST['genero'] ?? null;
$editorial = $_POST['editorial'] ?? null;
$precio = $_POST['precio'] ?? null;

$nuevo_libro = [
    "id" => $id,
    "titulo" => $titulo,
    "autor" => $autor,
    "genero" => $genero,
    "editorial" => $editorial,
    "precio" => $precio
];

//Cargo el array de libros existentes
$libros = get_tabla_libros();

//Añadir el nuevo libro al array
$libros[] = $nuevo_libro;


?>