<?php
const SIGN = "<i>Деканат.</i>";

$orders = [
    "scholarship_accrual" => "<b>нарахування стипендії</b>",
    "expulsion" => "<b>відрахування неуспішних</b>",
    "gratitude" => "<b>вдячності відмінникам</b>",
    "calculation_premium" => "<b>нарахуванні премії</b>"
];

$students = [
    "misha" => [
        "name" => "Михайло",
        "email" => "misha@mail.com",
        "grade_average" => "2.3",
        "olympiads" => false
    ],
    "arsen" => [
        "name" => "Арсеній",
        "email" => "arsen@mail.com",
        "grade_average" => "4.0",
        "olympiads" => false
    ],
    "mark" => [
        "name" => "Марк",
        "email" => "mark@mail.com",
        "grade_average" => "3.6",
        "olympiads" => true
    ],
    "kate" => [
        "name" => "Кейт",
        "email" => "kate@mail.com",
        "grade_average" => "5.0",
        "olympiads" => false
    ]
];

foreach ($students as $key => $stud_info) {
    if ($key != "") {
        foreach ($stud_info as $key1 => $info) {
            if ($key1 == "olympiads" && $info == true) {
                $invitation[$key] = "calculation_premium";
            }

            if ($key1 == "grade_average" && $info >= 4.0) {
                $invitation[$key] = "scholarship_accrual";
            }
            if ($key1 == "grade_average" && $info == 5.0) {
                $invitation[$key] = "gratitude";
            }
            else if ($key1 == "grade_average" && $info < 3.0) {
                $invitation[$key] = "expulsion";
            }
        }
    }
}