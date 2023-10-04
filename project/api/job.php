<?php
// Работа с объявлениями о вакансиях

require_once('config.php');
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Получение объявлений о вакансиях на основе поискового запроса (например, "врач")
    $searchQuery = isset($_GET['q']) ? $_GET['q'] : '';

    // Запросить базу данных для поиска соответствующих объявлений о вакансиях
    $query = "SELECT * FROM jobs WHERE title LIKE :searchQuery";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':searchQuery', '%' . $searchQuery . '%', PDO::PARAM_STR);
    $stmt->execute();

    // Получение и возврат списков вакансий в формате JSON
    $jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    header('Content-Type: application/json');
    echo json_encode($jobs);
} else {
    header("HTTP/1.1 405 Метод не разрешен");
    echo 'Метод не разрешен';
}
?>