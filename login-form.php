<?php
$str = "";
$username = "";
$password = "";
$class = "ok";
if (isset($_POST['sending'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "1234") {
        $str = "Вхід успішний. Ласкаво просимо!";
    } else {
        $str = "Помилка! Неправильний логін або пароль. Спробуйте ще раз.";
        $class = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вхід</title>
    <style>
        .ok {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF']?>" name="login" method="POST">
        <label for="username">Логін:</label>
        <input type="text" name="username" id="username" value="<?=$username?>" required>
        <label for="password">Пароль:</label>
        <input type="password" name="password" id="password" value="<?=$password?>" required>
        <input type="submit" value="Увійти" name="sending">
    </form>
    <p class="<?=$class?>"><?=$str?></p>
</body>
</html>
