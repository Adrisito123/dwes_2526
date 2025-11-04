<?php
function get_tabla_libros(){
    return [
        ["id"=>1, "titulo"=>"Los Señores del tiempo", "autor"=>"García Sénz de Urturi", "genero"=>"Novela", "precio"=>19.50, "editorial"=>"Planeta"],
        ["id"=>2, "titulo"=>"El Rey recibe", "autor"=>"Eduardo Mendoza", "genero"=>"Novela", "precio"=>20.50, "editorial"=>"Seix Barral"],
        ["id"=>3, "titulo"=>"Diario de una mujer", "autor"=>"Eduardo Mendoza", "genero"=>"Juvenil", "precio"=>12.95, "editorial"=>"Alfaguara"],
        ["id"=>4, "titulo"=>"El Quijote de la Mancha", "autor"=>"Miguel de Cervantes", "genero"=>"Novela", "precio"=>15.95, "editorial"=>"Espasa"]
    ];
}

function buscar_indice($tabla, $id){
    foreach($tabla as $indice => $libro){
        if($libro['id']==$id) return $indice;
    }
    return null;
}

function actualizar($tabla, $indice, $nuevo_libro){
    if(isset($tabla[$indice])) $tabla[$indice]=$nuevo_libro;
    return $tabla;
}

function eliminar($tabla, $id){
    foreach($tabla as $indice=>$libro){
        if($libro['id']==$id){
            unset($tabla[$indice]);
            break;
        }
    }
    return array_values($tabla);
}
function ordenar($tabla, $criterio) {
    usort($tabla, function($a, $b) use ($criterio) {
        // Comparar ignorando mayúsculas/minúsculas
        return strcasecmp($a[$criterio], $b[$criterio]);
    });
    return $tabla;
}
function filtrar($tabla, $expresion){
    $resultado = [];
    foreach($tabla as $libro){
        // Buscar en todos los campos si coinciden exactamente con la expresión
        foreach($libro as $valor){
            if(strval($valor) === $expresion){
                $resultado[] = $libro;
                break;
            }
        }
    }
    return $resultado;
}


?>
