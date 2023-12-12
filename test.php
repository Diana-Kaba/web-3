<?php
$var = "hello";
$$var = "world";
// echo $hello;

$array = array();
$array = str_split("world");
foreach ($array as $k => $v) {
 $$v = $k;
//  echo $$v;
}

function f(&$d) {
    $d++;
   }
   $d = 200;
   $e = 100;
   f($e);
//    echo "$d + $e";


$a = "1";
$a[$a] = "2";
// echo $a;

$arr = array("a","b","c");
$arr[] = "й";
// print_r($arr);

// $x = 1;
// $x == '1' ? print '1' : print'0';
// $x == true ? print '1' : print'0';
// $x === true ? print '1' : print'0';
// (bool)$x === true ? print '1' : print'0';

// $str="12345";
// $str = str_split($str);
// print_r($str);
// echo '<br>';
// $str = array_flip($str);
// print_r($str);
// echo '<br>';
// $str = array_sum($str);
// print_r($str);
// echo array_sum(array_flip(str_split( $str)));

$str="Hello, this <b>word</b> is bold!";
$re = '|<(\w+)>(.*?)</\1>|';
preg_match($re, $str, $pockets);
// echo $pockets[2];

// echo (int)(4.5);
// $a = array("a" => "apple", "b" => "banana", "c" => "bread");
// print_r(array_chunk ($a, 1, true));

$arr1 = [1, 2, 3, 4];
$arr2 = [];
while (list(, $arr1[]) = each($arr2)){} unset($arr1[sizeof($arr1)-1]);
print_r($arr2);

?>