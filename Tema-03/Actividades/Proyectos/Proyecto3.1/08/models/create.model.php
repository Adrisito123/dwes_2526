<?php
$id = $_POST['id'] ?? null;
$titulo = $_POST['titulo'] ?? null;
$autor = $_POST['autor'] ?? null;
$genero = $_POST['genero'] ?? null;
$editorial = $_POST['editorial'] ?? null;
$precio = $_POST['precio'] ?? null;

$nuevo_libro = ["id"=>$id,"titulo"=>$titulo,"autor"=>$autor,"genero"=>$genero,"editorial"=>$editorial,"precio"=>$precio];
$libros = get_tabla_libros();
$libros[] = $nuevo_libro;
?>
