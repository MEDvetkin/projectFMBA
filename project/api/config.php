<?php
// Конфигурационный файл для API

// Конфигурация базы данных
$db_host = 'localhost';
$db_name = 'your_database_name';
$db_user = 'your_database_user';
$db_password = 'your_database_password';

try {
    $db = new PDO("pgsql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Сбой подключения к базе данных: " . $e->getMessage());
}
?>
