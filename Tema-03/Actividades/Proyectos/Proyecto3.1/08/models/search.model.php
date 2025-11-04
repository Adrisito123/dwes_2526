<?php
$expresion = $_GET['expresion'] ?? null;
$libros = get_tabla_libros();

if ($expresion) {
    $aux = [];
    foreach ($libros as $libro) {
        foreach ($libro as $valor) {
            if ((string)$valor === $expresion) {
                $aux[] = $libro;
                break;
            }
        }
    }
    $libros = $aux;
}
?>
