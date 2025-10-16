<<<<<<< HEAD:tema-02/actividades/Proyecto/Calculadora/Index.php
<?php
include '../../../Recursos/plantillas/index.html';
?>
=======
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Básica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="card shadow-sm">
        <div class="card-body bg-light">
            <div class="p-4 mb-4 bg-secondary-subtle rounded">
                <h5 class="text-dark">Proyecto - Tema 2 DWES 20/21</h5>
                <hr>
                <h1 class="display-5 fw-bold">Calculadora Básica</h1>
            </div>

            <form action="calcular.php" method="post">
                <div class="mb-3">
                    <label for="valor1" class="form-label">Valor 1:</label>
                    <input type="number" class="form-control" id="valor1" name="valor1" placeholder="0" required>
                    <div class="form-text">Introduzca primer valor</div>
                </div>

                <div class="mb-3">
                    <label for="valor2" class="form-label">Valor 2:</label>
                    <input type="number" class="form-control" id="valor2" name="valor2" placeholder="0" required>
                    <div class="form-text">Introduzca segundo valor</div>
                </div>

                <div class="d-flex gap-2">
                    <button type="reset" class="btn btn-secondary">Borrar</button>
                    <button type="submit" formaction="sumar.php" class="btn btn-primary">Suma</button>
                    <button type="submit" formaction="restar.php" class="btn btn-primary">Resta</button>
                    <button type="submit" formaction="dividir.php" class="btn btn-primary">División</button>
                    <button type="submit" formaction="multiplicar.php" class="btn btn-primary">Multiplicar</button>
                    <button type="submit" formaction="exponencial.php" class="btn btn-primary">Exponencial</button>
                 </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
>>>>>>> 27233006adfc85fbf5daad1dfd88613591e7a040:Tema-02/Actividades/Proyecto/Calculadora/Index.php
