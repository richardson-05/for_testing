<?php

require_once 'model/Users.php';

class UsersController
{
    private $model;

    public function __construct()
    {
        // Inicializar el modelo
        $this->model = new Users();
    }

    public function index() {
        // Mostrar la lista de productos
        $users = $this->model->listar();
        require_once 'View/index.php';
    }

    public function showUser($id) {
        // Mostrar los detalles de un producto
        $producto = $this->model->obtenerPorId($id);
        require_once 'View/show-user.php';
    }

    public function usersView()
    {
        $usuarios = $this->model->listar();
        // Mostrar la lista de usuarios
        require_once 'View/users-view.php';
    }

    public function usersRegisterForm()
    {
        // Mostrar el formulario para crear un nuevo producto
        require_once 'View/register-user.php';
    }

    public function register($nombres, $apellidos, $usuario, $correo, $contrasena)
    {
        try {
            // Insertar un nuevo producto en la tabla
            $this->model->createUser($nombres, $apellidos, $usuario, $correo, $contrasena);
            //$this->index();
            header("location: ?action=users-view");
        } catch (\Throwable $th) {
            echo ($th->getMessage() . "<br>");
            if (strpos($th->getMessage(), 'usuario')) {
                //echo ("Tiene");
                //header("location: index.php?action=users-register-view&invalid-user=true");
            } else {
                //echo ("No tiene");
                //header("location: index.php?action=users-register-view&invalid-email=true");
            }
        }
    }

    public function editUser($id) { // No se usa - Se usa el update
        // Mostrar el formulario para editar un producto existente
        $usuarios = $this->model->obtenerPorId($id);
        require_once 'View/edit-user.php';
    }
    
    public function update($id, $nombres, $apellidos, $usuario, $correo, $contrasena) {
        // Actualizar un producto en la tabla
        $this->model->actualizar($id, $nombres, $apellidos, $usuario, $correo, $contrasena);
        //$this->index();
        header("location: ?action=users-view");
    }
    
    public function delete($id) {
        // Eliminar un producto de la tabla
        $this->model->eliminar($id);
        //$this->index();
        header("location: ?action=users-view");
    }

    /*** Richardson Mercedes ***/

    public function showError404() {
        // Mostrar la vista de error 404 cuando no se encuentra la página o el recurso deseado
        require_once 'View/error-404/users-error.php';
        //header("location:View/error-404");
    }

    public function error404() {
        $this->showError404();
        die();
    }
}
