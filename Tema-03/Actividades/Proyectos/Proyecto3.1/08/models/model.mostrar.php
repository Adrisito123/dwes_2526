<?php
$id = $_GET['id'] ?? null;
$libros = get_tabla_libros();
$indice = buscar_indice($libros, $id);

if($indice===null){
    echo "ERROR: Libro no encontrado";
    exit();
}

$libro = $libros[$indice];
?>
