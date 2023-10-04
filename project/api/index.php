<?php
// api/index.php

require_once('config.php');
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Обрабатывать входящие почтовые данные
    $data = json_decode(file_get_contents("php://input"), true);

    // Проверьте и обработайте данные (реализуйте здесь свою собственную логику проверки)

    // Вставить данные в базу данных PostgreSQL
    $insertQuery = "INSERT INTO applications (name, email, resume) VALUES (:name, :email, :resume)";
    $stmt = $db->prepare($insertQuery);
    $stmt->bindParam(':name', $data['Имя']);
    $stmt->bindParam(':email', $data['Электронная почта']);
    $stmt->bindParam(':resume', $data['Резюме']);
    $stmt->execute();

    // Возвращает сообщение об успешном завершении во внешний интерфейс
    $response = array('message' => 'Заявка успешно подана');
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    header("HTTP/1.1 405 Метод не разрешен");
    echo 'Метод не разрешен';
}
?>
