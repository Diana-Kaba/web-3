<?php

require_once 'autoload.php';

$product = new Product("Galaxy S24", 38000);
echo $product;
echo "\n";

$user1 = new User("diana", "123");
$user2 = new User("alex", "123");
$user3 = new User("pit", "123");
$user4 = new User("kate", "123");

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
    echo "Логін і пароль валідні";
} else {
    echo "Помилка з логіном і паролем!";
}

$group = [$user1, $user2, $user3];
$users = new Users($group);

$users->setUser($user1);
$users->setUser($user4);

echo "\n";
echo $users;
echo "\n";

if ($users->isValid("diana", "123")) {
    echo "Логін і пароль валідні";
} else {
    echo "Помилка з логіном і паролем!";
}

echo "\n";
if ($users->isValid("ann", "123")) {
    echo "Логін і пароль валідні";
} else {
    echo "Помилка з логіном і паролем!";
}

echo "\n";
if ($users->deleteUser("ann")) {
    echo "Користувача видалено";
} else {
    echo "Такого користувача не існує!";
}

echo $users;

if ($users->deleteUser("diana")) {
    echo "Користувача видалено";
} else {
    echo "Такого користувача не існує!";
}
