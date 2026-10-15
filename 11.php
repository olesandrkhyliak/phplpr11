<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Форма-відповідь</title>
</head>
<body>

<h3>Ваша відповідь:</h3>

<form action="" method="GET">
    <p>Email<br>
    <input type="text" name="email"></p>
    
    <p>Коментар<br>
    <textarea name="comment"></textarea></p>
    
    <input type="submit" value="Надіслати">
</form>

<?php
if (isset($_GET["email"]) && isset($_GET["comment"])) {
    $email = trim($_GET["email"]);
    $comment = trim($_GET["comment"]);

    echo "<h3>Результат надсилання відповіді:</h3>";

    // Перевірка чи заповнені обидва поля
    if (empty($email) || empty($comment)) {
        echo "<p>Введіть дані в усі поля форми</p>";
    } else {
        // Перевірка коректності e-mail за допомогою регулярного виразу
        $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        
        if (preg_match($pattern, $email)) {
            echo "<p>Перевірка адреси пройдена успішно!</p>";
            echo "<p>Дані успішно надіслані</p>";
        } else {
            echo "<p>Перевірка адреси не пройдена!</p>";
        }
    }
}
?>

</body>
</html>