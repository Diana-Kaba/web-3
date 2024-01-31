<?php

require_once "autoload.php";

$hum1 = new Human("Діана Каба", 2007, 17, "Харків");
$hum2 = new Human("Артем Коваленко", 2006, "", "Київ");
$hum3 = new Human("Василь Петренко", 2000, 24);

$hum2->setAge(18);
$hum3->setCity("Одеса");

$citizen = new Citizen("Іван Марченко", 1990, 34, "Тернопіль", "xy12345");

$student = new Student("Алекс Адамс", 1985, 29, "Лондон", "db044c6", "National University", 4.9);

$employee = new Employee("Уілл Сміт", 1968, 55, "США", "e4cb0f0", "ABC Company", 1500);

$people = [$hum1, $hum2, $hum3, $citizen, $student, $employee];

foreach ($people as $person) {
    echo $person;
}

// Тест встановлення віку
// if ($hum2->setAge(19)) {
//     echo "Вік встановлено.\n";
// } else {
//     echo "Помилка!\n";
// }
// if ($hum2->setAge(18)) {
//     echo "Вік встановлено.\n";
// } else {
//     echo "Помилка!\n";
// }
