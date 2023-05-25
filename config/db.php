<?php

class Database
{
    private $host = 'localhost';
    private $db_name = 'for_testing';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function __construct()
    {
        $this->conn = null;

        try {
            $dsn = "mysql:host={$this->host};dbname={$this->db_name}";
            $this->conn = new PDO($dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo 'Conexión exitosa<br><br>';
        } catch (PDOException $e) {
            echo 'Error de conexión: <br><br>' . $e->getMessage();
        }
    }

    public function query($query)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function execute($query, $params = array())
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
    }
}