<?php $acive = 1; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear nuevo producto</title>
    <link rel="stylesheet" type="text/css" href="<?php echo (constant("css")) ?>main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo (constant("css")) ?>header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo (constant("css")) ?>form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <?php require_once("includes/header.php"); ?>

    <main>
        <h1 class="title">Crear nuevo producto</h1>

        <form action="index.php?action=guardar" method="POST" class="radius10px">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationServer01">Nombre</label>
                    <input type="text" class="form-control" id="validationServer01" required placeholder="Producto" name="nombre"> <!-- is-valid -->
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationServer02">Precio</label>
                    <input type="number" class="form-control" id="validationServer02" required placeholder="00.00" name="precio">
                </div>
            </div>
            <div class="form-row">
                <div class="col-lg mb-3">
                    <label for="validationServer03">Descripción</label>
                    <textarea name="descripcion" id="validationServer03" placeholder="Descripción del producto" require></textarea> <!-- is-valid -->
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Registrar</button>

            <a href="?action=products-view" class="btn_back">Volver a lista de productos</a>
        </form>

    </main>

    <script src="<?php echo (constant("js")) ?>header.js"></script>
</body>

</html>