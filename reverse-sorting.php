<?php

$arr = [" Dream of become a full-stack developer.", "Hello!", " I'm from Kharkiv.", " My name is Diana."];
$sentence = "";

function cmp_str($a, $b)
{
    $a = strlen($a);
    $b = strlen($b);

    // if ($a > $b) {
    //     return 1;
    // }
    // if ($a == $b) {
    //     return 0;
    // } else {
    //     return -1;
    // }

    return $a <=> $b;
}

uasort($arr, "cmp_str");

foreach ($arr as $elem) {
    $sentence .= "$elem";
}

echo $sentence;
