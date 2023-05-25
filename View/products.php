<?php $acive = 1; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de productos</title>
  <link rel="stylesheet" type="text/css" href="<?php echo (constant("css")) ?>main.css">
  <link rel="stylesheet" type="text/css" href="<?php echo (constant("css")) ?>header.css">
  <link rel="stylesheet" type="text/css" href="<?php echo (constant("css")) ?>tables.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

  <?php require_once("includes/header.php"); ?>

  <main>

    <h1 class="title">Lista de productos</h1>

    <div class="table_container">
      <table class="table table-dark">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($productos as $producto) : ?>
            <tr>
              <td><?php echo $producto['id'] ?></td>
              <td><?php echo $producto['nombre'] ?></td>
              <td><?php echo $producto['descripcion'] ?></td>
              <td><?php echo $producto['precio'] ?></td>
              <td>
                <a href="index.php?action=show&id=<?php echo $producto['id'] ?>">Ver</a>
                <a href="index.php?action=edit&id=<?php echo $producto['id'] ?>">Editar</a>
                <a href="index.php?action=eliminar&id=<?php echo $producto['id'] ?>">Eliminar</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>

    <a href="index.php?action=crear" class="btn_back">Agregar producto</a>
  </main>

  <script src="<?php echo (constant("js")) ?>header.js"></script>
</body>

</html>