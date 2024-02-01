<?php

require_once "autoload.php";

$arr1 = [1, 2, 3, 4];
$arr2 = [5, 6, 7, 8];
$arr3 = [9, 10, 11, 12];

$arrCombo = [$arr1, $arr2, $arr3];

$arrObg = new Arr($arrCombo);
echo $arrObg;
