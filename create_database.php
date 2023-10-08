<?php
$servername = "localhost";
$username = "root";
$password = "mV3+ZRF3xULNqz";

// Создаём соединение
$conn = new mysqli($servername, $username, $password);

// Проверьте подключение
if ($conn->connect_error) {
    die("Соединение не удалось: " . $conn->connect_error);
}
echo 'Подключение успешно';

// Создаем новую базу данных
$sql = "create database magazine_lession";
if ($conn->query($sql) === true) {
    echo 'База данных успешно создана';
} else {
    echo "Ошибка создания базы данных: " . $conn-> ошибка;
}
?>