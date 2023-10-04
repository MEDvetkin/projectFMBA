<?php
// Этот скрипт будет обрабатывать отправку формы из интерфейса

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $api_url = 'http://your-api-url/api/index.php'; //Замените на ваш URL API

    $data = array(
        'name' => $_POST['Имя'],
        'email' => $_POST['Электронная почта'],
        'resume' => $_POST['Резюме']
    );

    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-Type: application/json',
            'content' => json_encode($data)
        )
    );

    $context = stream_context_create($options);
    $result = file_get_contents($api_url, false, $context);

    if ($result === false) {
    echo “Ошибка отправки данных!”;
    } else {
    $response = json_decode($result);
    if ($response->success) {
        echo “Сообщение успешно отправлено!”;}
        else {
    echo "Ошибка: " . $response->message;}
    }
}    