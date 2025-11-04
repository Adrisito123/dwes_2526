<?php
$indice = $_GET['indice'] ?? null;
$libros = get_tabla_libros();

if($indice!==null && isset($libros[$indice])){
    $libro = $libros[$indice];
}else{
    echo "ERROR: Libro no encontrado";
    exit();
}
?>
