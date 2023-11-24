<?php
// Підключення до бази даних
$conn = new mysqli("hostname", "username", "password", "database");

// Перевірка з'єднання
if ($conn->connect_error) {
    die("Помилка з'єднання з базою даних: " . $conn->connect_error);
}

// Отримання даних про книги з бази даних
$result = $conn->query("SELECT * FROM books");

// Вивід сторінок для кожної книги
while ($row = $result->fetch_assoc()) {
    echo "<h1>" . $row['title'] . "</h1>";
    echo "<p><strong>Автор:</strong> " . $row['author'] . "</p>";
    echo "<p><strong>Ціна:</strong> $" . $row['price'] . "</p>";
    echo "<p>" . $row['description'] . "</p>";
}

// Закриття з'єднання з базою даних
$conn->close();
?>
