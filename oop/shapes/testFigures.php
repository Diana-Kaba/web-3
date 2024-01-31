<?php

require_once "autoload.php";

$rect1 = new RectangleDrawer(100, 200, 80, 40, "coral");
$rect2 = new RectangleDrawer(150, 100, 70, 60, "coral");

$rectRound1 = new RoundRectangleDrawer(400, 500, 60, 50, "lightpink", 15);
$rectRound2 = new RoundRectangleDrawer(250, 180, 100, 90, "lightpink", 5);

$circle1 = new CircleDrawer(450, 260, 40, "bisque");
$circle2 = new CircleDrawer(550, 360, 70, "bisque");

$figures = [$rect1, $rect2, $circle1, $circle2, $rectRound1, $rectRound2];

foreach ($figures as $figure) {
    if ($figure instanceof Shape) {
        echo $figure->draw();
    }
}

echo "<p style='text-align: right;'>Нове розміщення:</p>";
foreach ($figures as $figure) {
    $x = rand(0, 500);
    $y = rand(0, 500);

    if ($figure instanceof Shape) {
        echo $figure->move($x, $y);
        echo $figure->draw();
    }
}