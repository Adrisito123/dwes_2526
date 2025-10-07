<?php
// views/view.resultado.php - La Vista de Resultados

// Si hubo un error en el cálculo o validación, mostramos un mensaje de error simple
if ($resultados['error'] ?? true) {
    $mensaje = $resultados['mensaje'] ?? "Ha ocurrido un error inesperado al procesar los datos.";
    
    // Si hay un error, solo mostramos el error y el botón de regreso
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Error - Lanzamiento de Proyectiles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-x-octagon-fill text-danger"></i>
            <span class="fs-3">Error en el Cálculo</span>
        </header>
        <main>
            <div class="alert alert-danger" role="alert">
                <?= htmlspecialchars($mensaje) ?>
            </div>
            <a href="index.php" class="btn btn-primary mt-3">Volver al Formulario</a>
        </main>
    </div>
</body>
</html>
<?php
    exit;
}

// Si no hay error, se muestra la lista de resultados según el formato de la imagen
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultados - Lanzamiento de Proyectiles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-rocket-takeoff-fill"></i>
            <span class="fs-3">Resultados del Lanzamiento de Proyectiles</span>
        </header>

        <main>
            <h4 class="mt-4">Valores Iniciales:</h4>
            <ul class="list-group mb-4 border">
                <li class="list-group-item">
                    <strong>Velocidad Inicial:</strong> 
                    <?= number_format($resultados['VO'], 4) ?> m/s
                </li>
                <li class="list-group-item">
                    <strong>Ángulo Inclinación:</strong> 
                    <?= number_format($resultados['A0_grados'], 4) ?> grados
                </li>
            </ul>
            
            <h4 class="mt-4">Resultados:</h4>
            <ul class="list-group border">
                <li class="list-group-item">
                    <strong>Ángulo Radianes:</strong> 
                    <?= number_format($resultados['A0_radianes'], 4) ?> rad
                </li>
                <li class="list-group-item">
                    <strong>Velocidad Inicial X:</strong> 
                    <?= number_format($resultados['Vox'], 4) ?> m/s
                </li>
                <li class="list-group-item">
                    <strong>Velocidad Inicial Y:</strong> 
                    <?= number_format($resultados['Voy'], 4) ?> m/s
                </li>
                <li class="list-group-item">
                    <strong>Alcance Máximo del Proyectil:</strong> 
                    <?= number_format($resultados['Xmax'], 4) ?> metros
                </li>
                <li class="list-group-item">
                    <strong>Tiempo de Vuelo del proyectil:</strong> 
                    <?= number_format($resultados['t'], 4) ?> segundos
                </li>
                <li class="list-group-item">
                    <strong>Altura Máxima del Proyectil:</strong> 
                    <?= number_format($resultados['Ymax'], 4) ?> metros
                </li>
            </ul>

            <a href="index.php" class="btn btn-primary mt-4">Volver</a>
        </main>
    </div>

    <footer class="footer mt-auto py-3 fixed-bottom bg-light">
        <div class="container">
            <span class="text-muted">© 2025 Afdrián Aránegas Molina - DWES - 2º DAW - Curso 25/26</span>
        </div>
    </footer>
</body>
</html>