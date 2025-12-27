<?php

class DbConnection
{
    private $pdo;
    public function __construct($host, $root, $password, $db, $port = 3307)
    {
        try {
            $this->pdo = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8", $root, $password);
            echo "Connection succes";
        } catch (PDOException $e) {
            die("Connection failed" . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}
