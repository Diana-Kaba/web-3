<?php
$h = fopen("my_file.html", "w"); // Буде відкритий файл нульової довжини "my_file.html" для записи.
$text = "Цей текст запишемо в файл.";
if (fwrite($h, $text)) {
    echo "Запис зроблено успішно";
} else {
    echo "Виникла помилка при запису даних";
}
