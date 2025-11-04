<!doctype html>
<html lang="es">
  <head>
    <?php require_once 'views/layouts/head.layouts.php'; ?>
    <title>Editar Libro</title>
  </head>

  <body class="bg-white">
    <div class="container my-4">
      <?php require_once 'views/partials/header.partial.php'; ?>

      <main>
        <legend>Formulario Edición de Libro</legend>

        <form action="update.php?indice=<?= $indice ?>" method="post">
          <div class="mb-3">
            <label for="id" class="form-label">ID:</label>
            <input type="number" class="form-control" id="id" name="id" value="<?= $libro['id']; ?>" readonly>
          </div>

          <div class="mb-3">
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $libro['titulo']; ?>" required>
          </div>

          <div class="mb-3">
            <label for="autor" class="form-label">Autor:</label>
            <input type="text" class="form-control" id="autor" name="autor" value="<?= $libro['autor']; ?>" required>
          </div>

          <div class="mb-3">
            <label for="genero" class="form-label">Género:</label>
            <input type="text" class="form-control" id="genero" name="genero" value="<?= $libro['genero']; ?>" required>
          </div>

          <div class="mb-3">
            <label for="editorial" class="form-label">Editorial:</label>
            <input type="text" class="form-control" id="editorial" name="editorial" value="<?= $libro['editorial']; ?>" required>
          </div>

          <div class="mb-3">
            <label for="precio" class="form-label">Precio:</label>
            <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="<?= $libro['precio']; ?>" required>
          </div>

          <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </main>
    </div>

    <?php include 'views/partials/footer.partial.php'; ?>
    <?php include 'views/layouts/js_bootstrap.layout.php'; ?>
  </body>
</html>
