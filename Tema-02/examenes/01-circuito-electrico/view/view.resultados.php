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

        <h1>Circuito Eléctrico</h1>

<div class="container">
<h3>Datos de Entrada</h3>
<table class="table">
  <thead>
    <tr class="table-danger">
      <th scope="col">#</th>
      <th scope="col">Magnitud</th>
      <th scope="col">Simbolo</th>
      <th scope="col" class="text-end">Valor</th>
      <th scope="col" class="text-end">Unidad</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Voltaje</td>
      <td>V</td>
      <td class="text-end"><?= number_format($V, 2 , ',' , ' ') ?></td>
      <td class="text-end">V</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Resistencia</td>
      <td>R</td>
      <td class="text-end"><?= number_format($R, 2 , ',' , ' ') ?></td>
      <td class="text-end">Ω</td>
    </tr>
  </tbody>
</table>

<h3>Datos de Salida</h3>
        <table class="table">
  <thead>
    <tr class="table-danger">
      <th scope="col">#</th>
      <th scope="col">Magnitud</th>
      <th scope="col" class="text-end">Valor</th>
      <th scope="col" class="text-end">Unidaad</th>
    </tr>
  </thead>
<tbody>
    <tr>
      <th scope="row">1</th>
        <td>Intensidad de Corriente </td>
        <td class="text-end" ><?= number_format($Intensidad, 2 , ',' , ' ') ?></td>
        <td class="text-end">A</td>
    </tr>
    <tr>
      <th scope="row">2</th>
        <td>Potencia Eléctrica </td>
        <td class="text-end" ><?=  number_format($Potencia, 2 , ',' , ' ') ?></td>
        <td class="text-end">W</td>
    </tr>
    <tr>
      <th scope="row">3</th>
        <td>Energia Consumida</td>
        <td class="text-end" ><?= number_format($Energia, 2 , ',' , ' ') ?></td>
        <td class="text-end">J</td>
    </tr>
    <tr>
      <th scope="row">4</th>
        <td>Resistenica </td>
        <td class="text-end" ><?=number_format($ResistenciaParalelo, 2 , ',' , ' ') ?></td>
        <td class="text-end"> Ω</td>
    </tr>
</tbody>
</table>

<div class="volver">
    <a class="btn btn-outline-primary" href="index.php" role="button">Volver</a>
</div>
        

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