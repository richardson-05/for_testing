<?php $acive = 2; ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ver usuario</title>
	<link rel="stylesheet" type="text/css" href="<?php echo (constant("css")) ?>main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (constant("css")) ?>header.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
	<?php require_once("includes/header.php"); ?>

	<main>

		<?php if (count($producto) > 0) { ?>
			<h1 class="title">Detalles del usuario</h1>

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
						<?php foreach ($producto as $producto) : ?>
							<tr>
								<td><?php echo $producto['id'] ?></td>
								<td><?php echo $producto['nombres'] ?></td>
								<td><?php echo $producto['apellidos'] ?></td>
								<td><?php echo $producto['usuario'] ?></td>
								<td><?php echo $producto['correo'] ?></td>
								<td>*****</td>
								<td>
									<a href="?action=edit-user&id=<?php echo $producto['id'] ?>">Editar</a>
									<a href="?action=delete-user&id=<?php echo $producto['id'] ?>">Eliminar</a>
								</td>
							</tr>
					</tbody>
			<?php endforeach;
					} else {
						$productosController = new ProductosController();
						$productosController->error404();
					} ?>
				</table>
			</div>

			<a href="?action=users-view" class="btn_back">Volver a la lista de usuarios</a>
	</main>

	<script src="<?php echo (constant("js")) ?>header.js"></script>
</body>

</html>