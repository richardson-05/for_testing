<?php
require_once 'config/db.php';

class Productos
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function listar()
    {
        $query = "SELECT * FROM productos";
        $result = $this->db->query($query);
        return $result;
    }

    public function obtenerPorId($id)
    {
        $query = "SELECT * FROM productos WHERE id = $id";
        $result = $this->db->query($query);
        return $result;
    }

    public function guardar($nombre, $descripcion, $precio)
    {
      $producto = [$nombre, $descripcion, $precio];
        $query = "INSERT INTO productos (nombre, descripcion, precio) VALUES (?, ?, ?)";
        $params = array($producto[0], $producto[1], $producto[2]);
        $this->db->execute($query, $params);
    }

    public function actualizar($id, $nombre, $descripcion, $precio)
    {
        $producto = [$nombre, $descripcion, $precio];
        $query = "UPDATE productos SET nombre = ?, descripcion = ?, precio = ? WHERE id = ?";
        //$params = array($producto['nombre'], $producto['descripcion'], $producto['precio'], $id);
        $params = array($producto[0], $producto[1], $producto[2], $id);
        $this->db->execute($query, $params);
    }

    public function eliminar($id)
    {
        $query = "DELETE FROM productos WHERE id = $id";
        $this->db->execute($query);
    }
}