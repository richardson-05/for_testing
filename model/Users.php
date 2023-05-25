<?php
require_once 'config/db.php';

class Users
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function listar()
    {
        $query = "SELECT * FROM usuarios";
        $result = $this->db->query($query);
        return $result;
    }

    public function obtenerPorId($id)
    {
        $query = "SELECT * FROM usuarios WHERE id = $id";
        $result = $this->db->query($query);
        return $result;
    }

    public function createUser($nombres, $apellidos, $usuario, $correo, $contrasena)
    {
        $producto = [$nombres, $apellidos, $usuario, $correo, $contrasena];
        $query = "INSERT INTO usuarios (nombres, apellidos, usuario, correo, contrasena) VALUES (?, ?, ?, ?, ?)";
        $params = array($producto[0], $producto[1], $producto[2], $producto[3], $producto[4]);
        $this->db->execute($query, $params);
    }

    public function actualizar($id, $nombres, $apellidos, $usuario, $correo, $contrasena)
    {
        $producto = [$nombres, $apellidos, $usuario, $correo, $contrasena];
        $query = "UPDATE usuarios SET nombres = ?, apellidos = ?, usuario = ?, correo = ?, contrasena = ? WHERE id = ?";
        $params = array($producto[0], $producto[1], $producto[2], $producto[3], $producto[4], $id);
        $this->db->execute($query, $params);
    }

    public function eliminar($id)
    {
        $query = "DELETE FROM usuarios WHERE id = $id";
        $this->db->execute($query);
    }
}
