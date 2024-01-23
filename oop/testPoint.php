<?php

require_once("Point.php");
$p1 = new Point(1, 2, 3);
echo $p1->distance()."\n";
$p2 = new Point(4, 5, 6);
echo  Point::distance1($p1, $p2)."\n";

echo $p1->distance2($p2)."\n";