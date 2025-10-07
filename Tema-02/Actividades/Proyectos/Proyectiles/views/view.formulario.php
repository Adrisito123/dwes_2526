<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 2.2 - Cálculo Lanzamiento de Proyectiles</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">

        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-rocket-takeoff-fill"></i>       
            <span class="fs-3">Proyecto 2.2 - Cálculo Lanzamiento de Proyectiles</span>
        </header>

        <main>
            <h1>Lanzamiento Proyectiles</h1>
            
            <form method="POST" action="model.calcular.php">
            
                <div  class="mb-3">
                    <label for="velInicial" class="form-label">Velocidad Inicial (VO):</label>
                    <input type="number" step="any" name="velocidad_inicial" class="form-control" id="velInicial" placeholder="0" required aria-describedby="helpVelInicial">
                    <small id ="helpVelInicial" class=" text-muted">Velocidad en (m/s) - Admite decimales</small>
                </div>       
                    
                <div  class="mb-3">
                    <label for="anguloLanzamiento" class="form-label">Ángulo de Elevación (A0):</label>
                    <input type="number" step="any" name="angulo_lanzamiento" class="form-control" id="anguloLanzamiento" placeholder="0" required aria-describedby="helpAngulo">
                    <small id ="helpAngulo" class=" text-muted">Ángulo en grados - Admite decimales</small>
                </div>

                <div class="btn-group" role="group">
                    <button type="reset" class="btn btn-secondary">Borrar</button>
                    <button type="submit" class="btn btn-warning">Calcular</button>
                </div>
            
            </form>

        </main>
    </div>

    <footer class="footer mt-auto py-3 fixed-bottom bg-light">
        <div class="container">
            <span class="text-muted">© 2025 Afdrián Aránegas Molina - DWES - 2º DAW - Curso 25/26</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>