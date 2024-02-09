<?php

function calcRoots($a, $b, $c)
{
    $d = $b * $b - 4 * $a * $c;

    if ($a == 0) {
        error_log("Error: You cannot divide by 0!");
        return false;
    } else if ($d < 0) {
        error_log("Error: Discriminant is negative, no roots exist.");
        return false;
    } else if ($d == 0) {
        $x = -$b / (2 * $a);
        return "x = $x";
    } else {
        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);
        return "x1 = $x1; x2 = $x2";
    }
}

$a = 1;
$b = -3;
$c = 2;
$roots = calcRoots($a, $b, $c);

if ($roots) {
    echo "Roots of the equation:\n" . $roots;
}
