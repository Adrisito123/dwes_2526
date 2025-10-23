<?php

/*
    Librería:funciones.php
    Descripcion:Fuinción para la gestión de lobros.
    Autor: Adrián Aránegs Molina
*/

function get_tabla_libros(){

$tabla = [
    [
        "id" => 1,
        "titulo" => "Los Señores del tiempo",
        "autor" => "García Sénz de Urturi",
        "genero" => "Novela",
        "precio" => 19.50,
        "editorial" => "Planeta"
    ],
    [
        "id" => 2,
        "titulo" => "El Rey recibe",
        "autor" => "Eduardo Mendoza",
        "genero" => "Novela",
        "precio" => 20.50,
        "editorial" => "Seix Barral"
    ],
    [
        "id" => 3,
        "titulo" => "Diario de una mujer",
        "autor" => "Eduardo Mendoza",
        "genero" => "Juvenil",
        "precio" => 12.95,
        "editorial" => "Alfaguara"
    ],
    [
        "id" => 4,
        "titulo" => "El Quijote de la Mancha",
        "autor" => "Miguel de Cervantes",
        "genero" => "Novela",
        "precio" => 15.95,
        "editorial" => "Espasa"
    ]
];

return $tabla;
}

// Añadir esta función a libs/functions.php
function buscar_indice($tabla, $id) {
    foreach ($tabla as $indice => $libro) {
        if ($libro['id'] == $id) {
            return $indice; // <-- Retorna el índice (integer)
        }
    }
    return null; // Retorna null si no se encuentra
}

?>
