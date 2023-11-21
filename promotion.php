<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Акція</title>
    <style>
        i {
            color: coral;
        }
    </style>
</head>
<body>
<?php
date_default_timezone_set('Europe/Kyiv');

$now = time();
$nowDate = date("d.m.Y H:i", $now);
$future = mktime(0, 0, 0, 12, 19, 2023);

$diff = $future - $now;
$days = round($diff / (24 * 60 * 60), 0);
$hours = round($diff / (60 * 60), 0);
$minutes = round($diff / 60, 0);

echo "<h1>Акція закінчиться через <i>$days днів $hours годин $minutes хвилин</i></h1>";
echo "<h2>Сьогодні <i>$nowDate</i></h2>";
?>

</body>
</html>