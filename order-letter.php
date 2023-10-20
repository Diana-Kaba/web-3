<?php
require_once "students.php";

foreach ($students as $key => $stud_info) {
    $order_key = $invitation[$key];
    if ($order_key != "") {
        foreach ($stud_info as $key1 => $info) {
            if ($key1 == "name")
                $str = "Шановний/нa $info!";
        }
        $str .= " Інформуємо Вас щодо " .
                $orders[$order_key];
        switch ($order_key) {
            case "scholarship_accrual":
                $str .= ". Завдяки Вашим старанням, Ви маєте чудовий середній бал. Відповідно, маєте стипендію! Вітаємо!";
                break;
            case "expulsion":
                $str .= ". На жаль, Ваш середній бал незадовільний. Оповіщаємо про відрахування. Успіхів!";
                break;
            case "gratitude":
                $str .= ". Ви - наша гордість! Відмінний середій бал. Дякуємо за старанність!";
                break;
            case "calculation_premium":
                $str .= ". Ви дуже активні, так тримати! Завдяки участі в олімпідах, Вам надана премія. Вітаємо!";
                break;
            default: $str .= "... Вибачте, але Вам ще не приходили розпорядження.";
        }
        $str .= "<br>" . SIGN . "<br>";

        echo $str;
    }
}