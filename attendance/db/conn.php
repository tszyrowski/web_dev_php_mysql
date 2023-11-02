<?php
    $host = '127.0.0.1';
    $db = 'attendance';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user, $pass);
        echo "Connection successful";
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage());
    }
?>