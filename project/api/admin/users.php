php
<?php

// Добавьте сюда логику аутентификации, чтобы гарантировать, что только администраторы могут получить доступ к этой странице

require_once('../config.php');
require_once('../db.php');

//Извлечение пользовательских данных из базы данных
$query = "SELECT * FROM users";
$stmt = $db->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Management</title>
</head>
<body>
    <h1>User Management</h1>
    <table>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['ФИО'] ?></td>
            <td><?= $user['Почта'] ?></td>
            <td>
                <?php if ($user['status'] === 'pending'): ?>
                    <button onclick="acceptUser(<?= $user['user_id'] ?>)">Принять</button>
                    <button onclick="refuseUser(<?= $user['user_id'] ?>)">Отказ</button>
                <?php else: ?>
                    <!-- Отображать соответствующий контент или кнопки в зависимости от статуса пользователя -->
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <script>
        function acceptUser(userId) {
            // Реализовать код для принятия пользователя с заданным идентификатором пользователя
            // Возможно, вы захотите сделать запрос API, чтобы обновить статус пользователя до "принято"
            // После обработки вы можете обновить страницу или пользовательский интерфейс по мере необходимости
        }

        function refuseUser(userId) {
            // Реализовать код для отказа пользователю с заданным идентификатором пользователя
            // Возможно, вы захотите сделать запрос API, чтобы обновить статус пользователя до "отказано"
            // После обработки вы можете обновить страницу или пользовательский интерфейс по мере необходимости
        }
    </script>
</body>
</html>