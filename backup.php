<?php

$pathdir = 'site/';
$zipname = "backup/" . "b_" . time() . ".zip";
$zip = new ZipArchive();

if ($zip->open($zipname, ZIPARCHIVE::CREATE)) {
    $dir = opendir($pathdir);
    while ($d = readdir($dir)) {
        if ($d !== "." && $d !== "..") {
            echo "Добавляем в архив файл " . $d . " размером " . filesize($pathdir . $d) . "<br />";
            $zip->addFile($pathdir . $d);
        }
    }
    $zip->close();
    echo 'Файлы добавлены в архив';
} else {
    echo "Ошибка открытия файла архива!";
}
