<?php

//echo "index.php inicial de la app<br>";

// Carga del archivo de configuración de la base de datos
require_once 'config/db.php';
require_once 'config/config.php';

// Carga de los archivos de clases de modelo y controlador
//require_once 'model/Productos.php';
require_once 'controller/productosController.php';
require_once 'controller/usersController.php';

// Instanciación del controlador de productos
$productosController = new ProductosController();
$usuariosController = new UsersController();


// Ruteo de las peticiones del usuario a las acciones del controlador
if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {
    case 'crear':
      $productosController->create();
      break;
    case 'guardar':
      $nombre = $_POST['nombre'];
      $descripcion = $_POST['descripcion'];
      $precio = $_POST['precio'];
      $productosController->store($nombre, $descripcion, $precio);
      break;
    case 'edit':
      $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
      $productosController->edit($id);
      //echo "klk = " . $id;
      break;
    case 'edit-user':
      $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
      $usuariosController->editUser($id);
      //echo "klk = " . $id;
      break;
    case 'show':
      $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
      if ($id == "") {
        $productosController->error404();
      }
      $productosController->show($id);
      break;
    case 'show-user':
      $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
      if ($id == "") {
        $usuariosController->error404();
      }
      $usuariosController->showUser($id);
      break;
    case 'actualizar':
      $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;

      $nombre = $_POST['nombre'];
      $descripcion = $_POST['descripcion'];
      $precio = $_POST['precio'];

      $productosController->update($id, $nombre, $descripcion, $precio);
      //echo "<br><br>klk = " . $id;

      //echo "<br>Revisar el case Actualizar del index.php";
      break;
    case 'actualizar-usuario':
      $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;

      $nombres = $_POST['name'];
      $apellidos = $_POST['lastname'];
      $usuario = $_POST['user'];
      $correo = $_POST['email'];
      $contrasena = $_POST['password'];
      $confirmar_contrasena = $_POST['confirm_password'];
      if ($contrasena == $confirmar_contrasena) {
        $usuariosController->update($id, $nombres, $apellidos, $usuario, $correo, $contrasena);
        //echo ("Todo correcto");
      } else {
        echo ("Las contraseñas no coinsiden");
      }
      //} catch (\Throwable $th) {
      //echo 'Error de conexión: <br><br>' . $th->getMessage();
      //}
      echo "<br>" . $nombres . "<br>" . $apellidos . "<br>" . $usuario . "<br>" . $correo . "<br>" . $contrasena . "<br>" . $confirmar_contrasena;

      //echo "<br>Revisar el case Actualizar del index.php";
      break;
    case 'eliminar':
      //$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
      $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : $productosController->error404();
      if ($id == "") {
        $productosController->error404();
      }
      $productosController->delete($id);
      break;
      case 'delete-user':
        //$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : $productosController->error404();
        if ($id == "") {
          $usuariosController->error404();
        }
        $usuariosController->delete($id);
        break;
    case "users-view":
      $usuariosController->usersView();
      break;
    case "create-user":
      $usuariosController->usersRegisterForm();
      break;
    case "register":
      //try {
      $nombres = $_POST['name'];
      $apellidos = $_POST['lastname'];
      $usuario = $_POST['user'];
      $correo = $_POST['email'];
      $contrasena = $_POST['password'];
      $confirmar_contrasena = $_POST['confirm_password'];
      if ($contrasena == $confirmar_contrasena) {
        $usuariosController->register($nombres, $apellidos, $usuario, $correo, $contrasena);
        //echo ("Todo correcto");
      } else {
        echo ("Las contraseñas no coinsiden");
      }
      //} catch (\Throwable $th) {
      //echo 'Error de conexión: <br><br>' . $th->getMessage();
      //}
      echo "<br>" . $nombres . "<br>" . $apellidos . "<br>" . $usuario . "<br>" . $correo . "<br>" . $contrasena . "<br>" . $confirmar_contrasena;
      break;
    case "products-view":
      $productosController->productsView();
      break;
    default:
      $productosController->index();
  }
} else {
  $productosController->index();
}


/*echo "hola";
var_dump($productosController);*/

//echo constant("css");