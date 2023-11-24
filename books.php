<?php
$host = 'ваш_хост';
$username = 'Marta';
$password = '1234';
$database = 'db_connection.sql';

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Помилка підключення до бази даних: " . $connection->connect_error);
}
?>
