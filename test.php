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
print_r($arr);
?>