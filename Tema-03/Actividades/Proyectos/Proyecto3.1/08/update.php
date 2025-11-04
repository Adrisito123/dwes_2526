<?php
include __DIR__ . '/libs/functions.php';
$indice = $_GET['indice'] ?? null;
$id = $_POST['id'] ?? null;
$titulo = $_POST['titulo'] ?? null;
$autor = $_POST['autor'] ?? null;
$genero = $_POST['genero'] ?? null;
$editorial = $_POST['editorial'] ?? null;
$precio = $_POST['precio'] ?? null;

$libro_actualizado = ["id"=>$id,"titulo"=>$titulo,"autor"=>$autor,"genero"=>$genero,"editorial"=>$editorial,"precio"=>$precio];
$libros = get_tabla_libros();

if($indice!==null){
    $libros = actualizar($libros, $indice, $libro_actualizado);
}

include __DIR__ . '/views/view.index.php';
?>
