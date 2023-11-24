<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список книг</title>
</head>
<body>

<h1>Список книг</h1>

<!-- Підключення до бази даних -->
<?php
$conn = new mysqli("hostname", "username", "password", "database");

if ($conn->connect_error) {
    die("Помилка з'єднання з базою даних: " . $conn->connect_error);
}

// Отримання даних про книги з бази даних
$result = $conn->query("SELECT id, title FROM books");

// Вивід короткого опису книг та посилань на сторінки
while ($row = $result->fetch_assoc()) {
    echo "<h2><a href=\"book.php?id=" . $row['id'] . "\">" . $row['title'] . "</a></h2>";
}

// Закриття з'єднання з базою даних
$conn->close();
?>

</body>
</html>
