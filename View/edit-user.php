<?php $acive = 2; ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editar usuario</title>
	<link rel="stylesheet" type="text/css" href="<?php echo (constant("css")) ?>main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (constant("css")) ?>header.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (constant("css")) ?>form.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
	<?php require_once("includes/header.php"); ?>

	<main>
		<!-- form method="post" action="index.php?action=actualizar&id=< ?php echo $producto['id']; ?>" -->


		<?php
		if (count($usuarios) > 0) {
			foreach ($usuarios as $usuarios) : ?>

				<h1 class="title">Editar usuario</h1>

				<!-- Form -->
				<form method="post" class="radius10px" action="index.php?action=actualizar-usuario&id=<?php echo $usuarios['id']; ?>">
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationServer01">Nombre(s)</label>
							<input type="text" class="form-control" id="validationServer01" name="name" require placeholder="Producto" value="<?php echo $usuarios['nombres']; ?>">
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationServer02">Apellido(s)</label>
							<input type="text" class="form-control" id="validationServer02" required placeholder="Mercedes" name="lastname" value="<?php echo $usuarios['apellidos']; ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationServer03">Usuario</label>
							<input type="text" class="form-control" id="validationServer03" required placeholder="richard" name="user" value="<?php echo $usuarios['usuario']; ?>"> <!-- is-valid -->
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationServer04">Correo electrónico</label>
							<input type="email" class="form-control" id="validationServer04" required placeholder="richard@correo.com" name="email" value="<?php echo $usuarios['correo']; ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationServer05">Crear contraseña</label>
							<input type="password" class="form-control" id="validationServer05" required name="password"> <!-- is-valid -->
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationServer06">Confirmar contraseña</label>
							<input type="password" class="form-control" id="validationServer06" required name="confirm_password">
						</div>
					</div>
					<button class="btn btn-primary" type="submit">Guardar</button>

					<a href="index.php?action=users-view" class="btn_back">Agregar usuario</a>
				</form>

		<?php endforeach;
			//echo count($producto);
		} else {
			$usuarioController = new UsersController();
			$usuarioController->error404();
		} ?>
	</main>

	<script src="<?php echo (constant("js")) ?>header.js"></script>
</body>

</html>