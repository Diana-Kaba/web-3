<?php
$str = "Чекаємо введеня дати...";

if (isset($_POST['send'])) {
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    if (checkdate($month, $day, $year)) {
        $str = "Введена правильна дата!";
    }
    else {
        $str = "Введена неправильна дата!";
    }
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Перевірка</title>
</head>
<body>
    <h1>Перевірка</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" name="checkingDate" method="post">
        <label for="day">Введіть день народження:</label>
        <input type="number" name="day" required>
        <br>
        <label for="month">Введіть місяць народження:</label>
        <input type="number" name="month" required>
        <br>
        <label for="year">Введіть рік народження:</label>
        <input type="number" name="year" required>
        <br>
        <input type="submit" value="ОК" name="send">
    </form>
    <p><?= $str ?></p>
</body>
</html>