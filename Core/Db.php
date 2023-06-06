<?php
$config = require 'config/config.php';

$dsn = "mysql:host={$config['db_host']};dbname={$config['db_name']};charset=utf8mb4";
$username = $config['db_user'];
$password = $config['db_password'];

try {
    $pdo = new PDO($dsn, $username, $password);
    // Використовуйте $pdo для виконання запитів до бази даних
} catch (PDOException $e) {
    echo "Помилка підключення до бази даних: " . $e->getMessage();
}
