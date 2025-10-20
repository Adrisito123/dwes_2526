<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actividad 34 - Tema 3 PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

  <body class="bg-white">

    <div class="container my-4">

        <header class="pb-3 mb-4 border-bottom">
            <h1 class="fs-1 fw-light">Actividad 34 - Tema 3 PHP</h1>
            <span class="text-muted">Gestión Tabla Libros</span>
        </header>

        <h2 class="fs-4 fw-semibold mb-3">Tabla Libros</h2>
        
        <div>
             <table class="table table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>id</th>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Género</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($libros as $libro): ?>
                            <tr>
                                <td><?= $libro['id'] ?></td>
                                <td><?= $libro['titulo'] ?></td>
                                <td><?= $libro['autor'] ?></td>
                                <td><?= $libro['genero'] ?></td>
                                <td><?= number_format($libro['precio'], 2, ',', '.') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
    </div>

    <div class="container mt-5">
        <span class="text-muted">© Adrián Aránegas - DWES - 2º DAW - Curso 19/20</span>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>