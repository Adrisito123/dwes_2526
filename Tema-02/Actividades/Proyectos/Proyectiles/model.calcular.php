<?php

define('G', 9.8); 

$resultados = [
    'error' => true,
    'mensaje' => "No se recibieron datos o la solicitud no es POST."
];

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.php");
    exit;
}

if (
    isset($_POST['velocidad_inicial']) && is_numeric($_POST['velocidad_inicial']) &&
    isset($_POST['angulo_lanzamiento']) && is_numeric($_POST['angulo_lanzamiento'])
) {
    $VO = floatval($_POST['velocidad_inicial']);
    $A0_grados = floatval($_POST['angulo_lanzamiento']);

    $A0_radianes = deg2rad($A0_grados);

    $Vox = $VO * cos($A0_radianes);
    $Voy = $VO * sin($A0_radianes);
    $t = (2 * $Voy) / G;
    $Ymax = ($Voy ** 2) / (2 * G);
    $Xmax = $Vox * $t;

    $resultados = [
        'VO' => $VO,
        'A0_grados' => $A0_grados,
        'Vox' => $Vox,
        'Voy' => $Voy,
        'A0_radianes' => $A0_radianes,
        'Xmax' => $Xmax,
        'Ymax' => $Ymax,
        't' => $t,
        'error' => false
    ];
    
} else {
    $resultados = [
        'error' => true,
        'mensaje' => "Error: La velocidad inicial y el ángulo deben ser valores numéricos válidos. Por favor, revíselos."
    ];
}

include 'views/view.resultado.php';