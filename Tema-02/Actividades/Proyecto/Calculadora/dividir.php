<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>División</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="card shadow-sm p-4">
        <h3 class="mb-3 text-primary">Resultado de la División</h3>

        <?php
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];

        if ($valor2 == 0) {
            echo "<p><strong>Valor 1:</strong> $valor1</p>";
            echo "<p><strong>Valor 2:</strong> $valor2</p>";
            echo "<h4 class='mt-3 text-danger'>Error: No se puede dividir entre cero.</h4>";
        } else {
            $resultado = $valor1 / $valor2;
            echo "<p><strong>Valor 1:</strong> $valor1</p>";
            echo "<p><strong>Valor 2:</strong> $valor2</p>";
            echo "<h4 class='mt-3'>Resultado: <span class='text-success'>$resultado</span></h4>";
        }
        ?>

        <a href="index.php" class="btn btn-secondary mt-4">Volver</a>
    </div>
</div>

</body>
</html>
