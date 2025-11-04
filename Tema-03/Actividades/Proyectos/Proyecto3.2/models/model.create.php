<?php
// Capturar datos del formulario (si existen)
$id           = $_POST['id'] ?? null;
$descripcion  = $_POST['descripcion'] ?? null;
$modelo       = $_POST['modelo'] ?? null;
$categoria_id = $_POST['categoria_id'] ?? null;
$unidades     = $_POST['unidades'] ?? null;
$precio       = $_POST['precio'] ?? null;

// Crear nuevo artículo
$nuevo_articulo = [
    "id" => $id,
    "descripcion" => $descripcion,
    "modelo" => $modelo,
    "categoria_id" => $categoria_id,
    "unidades" => $unidades,
    "precio" => $precio
];

// Obtener artículos existentes
$articulos = get_tabla_articulos();

// Añadir el nuevo artículo al array
$articulos[] = $nuevo_articulo;

// Contar total de artículos
$total_articulos = count($articulos);
?>
