<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Обробка даних</title>
</head>
<body>

<?php
// Перевірка існування та непорожності всіх полів
if (
    !empty($_POST["lastname"]) && 
    !empty($_POST["languages"]) && 
    !empty($_POST["places"]) && 
    !empty($_POST["time"])
) {
    $lastname = htmlentities($_POST["lastname"]);
    $languages = $_POST["languages"];
    $places = $_POST["places"];
    $time = htmlentities($_POST["time"]);

    echo "<p>Слухач <b>$lastname</b> обрав для вивчення курси з мов:</p>";
    echo "<ul>";
    foreach ($languages as $lang) {
        echo "<li>" . htmlentities($lang) . "</li>";
    }
    echo "</ul>";

    echo "<p>Можливе місце проведення занять:</p>";
    echo "<ul>";
    foreach ($places as $place) {
        echo "<li>" . htmlentities($place) . "</li>";
    }
    echo "</ul>";

    echo "<p>та година <b>$time</b></p>";
} else {
    echo "<p>Введені дані не коректні, заповніть всі поля</p>";
}
?>

</body>
</html>