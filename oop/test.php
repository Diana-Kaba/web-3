<?php

require_once 'autoload.php';

$product = new Product("Galaxy S24", 38000);
echo $product;
echo "\n";

$user1 = new User("diana", "123");

if ($user1->isValid("diana", "123")) {
    echo "Login and password is OK";
} else {
    echo "Error!";
}

echo "\n";
echo $user1->getPassword();
echo "\n";
echo $user1->getLogin();
$user1->setLogin("ann");
echo "\n";

if ($user1->isValid("diana", "123")) {
    echo "Login and password is OK";
} else {
    echo "Error!";
}

