<?php

class Database
{
    private $host = 'localhost';
    private $database_name = 'php_api_db';
    private $username = 'root';
    private $password = '';
    private $conn = null;

    public function getConnection()
    {
        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database_name, $this->username, $this->password);
            $this->conn->exec('set names utf8');
        } catch (PDOException $e) {
            echo "Database Could Not Be Connected: " . $e->getMessage();
        }
        return $this->conn;
    }
}
