<?php

require_once 'Model/Productos.php';

class ProductosController {
    private $model;
    
    public function __construct() {
        // Inicializar el modelo
        $this->model = new Productos();
    }
    
    public function index() {
        // Mostrar la lista de productos
        $productos = $this->model->listar();
        require_once 'View/index.php';
    }
    
    public function productsView() {
        // Mostrar la lista de productos
        $productos = $this->model->listar();
        require_once 'View/products.php';
    }

    public function show($id) {
        // Mostrar los detalles de un producto
        $producto = $this->model->obtenerPorId($id);
        require_once 'View/show.php';
    }
    
    public function create() {
        // Mostrar el formulario para crear un nuevo producto
        require_once 'View/create.php';
    }
    
    public function store($nombre, $descripcion, $precio) {
        // Insertar un nuevo producto en la tabla
        $this->model->guardar($nombre, $descripcion, $precio);
        //$this->index();
        header("location: index.php?action=products-view");
    }
    
    public function edit($id) { // No se usa - Se usa el update
        // Mostrar el formulario para editar un producto existente
        $producto = $this->model->obtenerPorId($id);
        require_once 'View/edit.php';
    }
    
    public function update($id, $nombre, $descripcion, $precio) {
        // Actualizar un producto en la tabla
        $this->model->actualizar($id, $nombre, $descripcion, $precio);
        //$this->index();
        header("location: index.php?action=products-view");
    }
    
    public function delete($id) {
        // Eliminar un producto de la tabla
        $this->model->eliminar($id);
        //$this->index();
        header("location: index.php?action=products-view");
    }

    /*** Richardson Mercedes ***/

    public function showError404() {
        // Mostrar la vista de error 404 cuando no se encuentra la página o el recurso deseado
        require_once 'View/error-404/product-error.php';
        //header("location:View/error-404");
    }

    public function error404() {
        $this->showError404();
        die();
    }
}