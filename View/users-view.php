<?php $acive = 2; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de usuarios</title>
  <link rel="stylesheet" type="text/css" href="<?php echo (constant("css")) ?>main.css">
  <link rel="stylesheet" type="text/css" href="<?php echo (constant("css")) ?>header.css">
  <link rel="stylesheet" type="text/css" href="<?php echo (constant("css")) ?>tables.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

  <?php require_once("includes/header.php"); ?>

  <main>

    <h1 class="title">Lista de usuarios</h1>

    <div class="table_container">
      <table class="table table-dark">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Usuario</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($usuarios as $usuario) : ?>
            <tr>
              <td><?php echo $usuario['id'] ?></td>
              <td><?php echo $usuario['nombres'] ?></td>
              <td><?php echo $usuario['apellidos'] ?></td>
              <td><?php echo $usuario['usuario'] ?></td>
              <td><?php echo $usuario['correo'] ?></td>
              <td>*****</td>
              <td>
                <a href="?action=show-user&id=<?php echo $usuario['id'] ?>">Ver</a>
                <a href="?action=edit-user&id=<?php echo $usuario['id'] ?>">Editar</a>
                <a href="?action=delete-user&id=<?php echo $usuario['id'] ?>">Eliminar</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>

    <a href="?action=create-user" class="btn_back">Agregar usuario</a>
  </main>

  <script src="<?php echo (constant("js")) ?>header.js"></script>
</body>

</html>