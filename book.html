<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Інформація про книгу</title>
</head>
<body>

<!-- Підключення до бази даних -->
<?php
$conn = new mysqli("hostname", "username", "password", "database");

if ($conn->connect_error) {
    die("Помилка з'єднання з базою даних: " . $conn->connect_error);
}

// Перевірка, чи передано ідентифікатор книги в параметрах
if (isset($_GET['id'])) {
    $book_id = $_GET['id'];

    // Отримання інформації про конкретну книгу
    $query = "SELECT title, author, price, description FROM books WHERE id = $book_id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $book = $result->fetch_assoc();

        // Вивід інформації про книгу
        echo "<h1>" . $book['title'] . "</h1>";
        echo "<p><strong>Автор:</strong> " . $book['author'] . "</p>";
        echo "<p><strong>Ціна:</strong> $" . $book['price'] . "</p>";
        echo "<p>" . $book['description'] . "</p>";
    } else {
        echo "<p>Книга не знайдена.</p>";
    }
} else {
    echo "<p>Помилка: Не передано ідентифікатор книги.</p>";
}

// Закриття з'єднання з базою даних
$conn->close();
?>

</body>
</html>
