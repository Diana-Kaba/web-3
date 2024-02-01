<?php

require_once "autoload.php";

$shop = new Shop();

$shop->buy("abc");
$shop->repayment("qwerty");
$shop->repayment("123");

echo $shop;
