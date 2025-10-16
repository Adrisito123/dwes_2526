<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Circuito Eléctrico</title>

    <!-- Bootstrap css 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Bootstrap Icons 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  </head>
  <body>
    <!-- Capa Principal -->
    <div class="container">

        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-app-indicator"></i>        
            <span class="fs-3">Calculo Circuito Electrico</span>
        </header>


<div class="container">
        <h2>Cálculo de Circuito Eléctrico</h2>
        <form action="calcular.php" method="POST">
            <p><label for="voltaje">Tensión o Voltaje :</label></p>
            <p><input type="number" id="voltaje" name="voltaje" step="0.01" min="0" required ></p>

            <p><label for="resistencia">Resistencia Eléctrica :</label></p>
            <p><input type="number" id="resistencia" name="resistencia" step="0.01" min="0" required></p>

            <input class="btn btn-secondary btn-sm" type="reset" value="Reset">
            <button class="btn btn-primary btn-sm " type="submit">Calcular Magnitudes</button>
          </form>
        

    </div>
    
    <!-- Pie del documento -->
    <footer class="footer mt-auto py-3 fixed-bottom bg-light">
        <div class="container">
            <span class="text-muted">© 2025
                Adrián Aránegas Molina - DWES - 2º DAW - Curso 25/26</span>
        </div>
    </footer>

     <!-- Bootstrap Javascript y popper 5.3.8 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>