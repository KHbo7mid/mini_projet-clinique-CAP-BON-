<?php

class Database {
    private $pdo;
    private $stmt;
    private $error;

    public function __construct() {
        $config = require __DIR__ . '/../config/config.php';
        $dbConfig = $config['database'];

        $dsn = "mysql:host={$dbConfig['host']};port={$dbConfig['port']};dbname={$dbConfig['dbname']};charset={$dbConfig['charset']}";
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];

        try {
            $this->pdo = new PDO($dsn, $dbConfig['user'], $dbConfig['password'], $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo "Database connection error: " . $this->error;
            exit;
        }
    }

    public function query($sql) {
        $this->stmt = $this->pdo->prepare($sql);
        return $this->stmt;
    }

    public function execute($params = []) {
        return $this->stmt->execute($params);
    }

    public function fetchAll() {
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetch() {
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getConnection() {
        return $this->pdo;
    }
}
