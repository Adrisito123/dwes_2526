<?php
include  'libs/funciones_articulos.php';


// Recoger datos del formulario
$id           = $_POST['id'] ?? null;
$descripcion  = $_POST['descripcion'] ?? null;
$modelo       = $_POST['modelo'] ?? null;
$categoria_id = $_POST['categoria_id'] ?? null;
$unidades     = $_POST['unidades'] ?? null;
$precio       = $_POST['precio'] ?? null;

// Construir el nuevo artículo
$nuevo_articulo = [
    "id" => (int)$id,
    "descripcion" => $descripcion,
    "modelo" => $modelo,
    "categoria_id" => (int)$categoria_id,
    "unidades" => (int)$unidades,
    "precio" => (float)$precio
];
// Obtener artículos
$articulos = get_tabla_articulos();

// Actualizar el artículo usando ID
$actualizado = actualizar_articulo($articulos, $id, $nuevo_articulo);

?>
