<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Реєстрація на курси</title>
</head>
<body>

<h2>Реєстрація на курси</h2>

<form action="form1.php" method="POST">
    <p>Ваше прізвище<br>
    <input type="text" name="lastname"></p>

    <p>Іноземні мови:<br>
    <select name="languages[]" size="5" multiple="multiple">
        <option value="english">english</option>
        <option value="німецька">нім</option>
        <option value="fr">fr</option>
        <option value="іспанська">ісп</option>
        <option value="італійська">іт</option>
    </select></p>

    <p>Місце проведення занять що вам підходить:<br>
    <select name="places[]" size="5" multiple="multiple">
        <option value="ІФНТУНГ">ІФНТУНГ</option>
        <option value="ІФНМУ">ІФНМУ</option>
        <option value="ПНУ">ПНУ</option>
        <option value="ВПУ/21">ВПУ/21</option>
        <option value="ВПУ СОТ">ВПУ СОТ</option>
    </select></p>

    <p>Час заняття що вам підходить:<br>
    <input type="radio" name="time" value="12.00"> 12.00<br>
    <input type="radio" name="time" value="13.00"> 13.00<br>
    <input type="radio" name="time" value="16.00"> 16.00<br>
    <input type="radio" name="time" value="18.00"> 18.00</p>

    <input type="submit" value="Надіслати">
</form>

</body>
</html>