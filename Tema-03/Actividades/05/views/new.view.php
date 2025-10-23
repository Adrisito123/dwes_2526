<!doctype html>
<html lang="es">
  <head>
    <?php
        require_once 'views/layouts/head.layouts.php';
    ?>
    <title>Actividad 3.3 - Tema 3 PHP</title>

    </head>

  <body class="bg-white">

    <div class="container my-4">

        <?php
            require_once 'partials/header.partial.php';
        ?>


       <main>
        <legend>Formulario Nuevo Libro</legend>

        <form action="create.php" method="post">
        <div  class="mb-3">
            <label for="id" class="form-label">ID:</label>
            <input type="number" class="form-control" id="id" name="id" required>
            </div>
        <div  class="mb-3">
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
        <div  class="mb-3">
            <label for="autor" class="form-label">Autor:</label>
            <input type="text" class="form-control" id="autor" name="autor" required>
            </div>
        <div  class="mb-3">
            <label for="genero" class="form-label">Género:</label>
            <input type="text" class="form-control" id="genero" name="genero" required>
            </div>
        <div  class="mb-3">
            <label for="editorial" class="form-label">Editorial:</label>
            <input type="text" class="form-control" id="editorial" name="editorial" required>
            </div>
        <div  class="mb-3">
            <label for="precio" class="form-label">Precio:</label>
            <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
            </div>
          <a class="btn btn-secondary" href='index.php' role="button">Volver</a>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-primary" >Añadir Libro</button>
        </form>

        </main>
        </div>
    </div>

    <?php

        include 'partials/footer.partial.php';

    ?>
    <?php

        include 'layouts/js_bootstrap.layout.php';

    ?>
  </body>
</html>