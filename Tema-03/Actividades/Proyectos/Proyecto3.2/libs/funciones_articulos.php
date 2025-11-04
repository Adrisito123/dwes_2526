<?php

// Función que simula la obtención de categorías
function get_tabla_categorias() {
    return [
        ['id' => 1, 'nombre' => 'Tecnologia'],
        ['id' => 2, 'nombre' => 'Almacenamiento'],
        ['id' => 3, 'nombre' => 'Portátiles'],
        ['id' => 4, 'nombre' => 'Accesorios']
    ];
}

// Función que simula la obtención de artículos
function get_tabla_articulos() {
    return [
        [
            'id' => 1,
            'descripcion' => 'Smartphone de última generación con pantalla OLED',
            'modelo' => 'Galaxy S25',
            'categoria_id' => 1, 
            'unidades' => 50,
            'precio' => 999.99
        ],
        [
            'id' => 2,
            'descripcion' => 'Disco duro externo de 2TB USB 3.0',
            'modelo' => 'WD Elements 2TB',
            'categoria_id' => 2, 
            'unidades' => 30,
            'precio' => 79.99
        ],
        [
            'id' => 3,
            'descripcion' => 'Portátil ultraligero con 16GB RAM y SSD de 512GB',
            'modelo' => 'Dell XPS 13',
            'categoria_id' => 3, 
            'unidades' => 20,
            'precio' => 1299.99
        ],
        [
            'id' => 4,
            'descripcion' => 'Ratón inalámbrico ergonómico con DPI ajustable',
            'modelo' => 'Logitech MX Master 3',
            'categoria_id' => 4, 
            'unidades' => 100,
            'precio' => 99.99
        ]
    ];
}

// Función para obtener el nombre de la categoría por su ID
function get_categoria_nombre($id) {
    $categorias = get_tabla_categorias();
    foreach ($categorias as $cat) {
        if ($cat['id'] == $id) return $cat['nombre'];
    }
    return 'Sin categoría';
}
function actualizar_articulo(&$articulos, $id, $nuevo_articulo) {
    foreach ($articulos as &$a) {
        if ($a['id'] == $id) {
            $a = $nuevo_articulo;
            return true;
        }
    }
    return false;
}
function eliminarArticulo($articulos, $id) {
    foreach($articulos as $indice => $articulo) {
        if(isset($articulo['id']) && $articulo['id'] == $id) {
            unset($articulos[$indice]);
            break;
        }
    }
    // Reindexa el array para mantener índices consecutivos
    return array_values($articulos);
}

function ordenar($tabla, $criterio) {
    usort($tabla, function($a, $b) use ($criterio) {
        if (is_numeric($a[$criterio]) && is_numeric($b[$criterio])) {
            return $a[$criterio] <=> $b[$criterio];
        }
        return strcasecmp($a[$criterio], $b[$criterio]);
    });
    return $tabla;
}
function filtrarArticulosPorID($articulos, $id) {
    $resultado = [];
    foreach ($articulos as $articulo) {
        if ($articulo['id'] == $id) {
            $resultado[] = $articulo;
        }
    }
    return $resultado;
}

?>

