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
        "grade_average" => "3.5",
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

$invitation["arsen"] = "scholarship_accrual";
$invitation["mark"] = "calculation_premium";
$invitation["misha"] = "expulsion";
$invitation["kate"] = "gratitude";