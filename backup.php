<?php

function rscandir($base = '', &$data = [])
{
    $array = array_diff(scandir($base), ['.', '..']);
    foreach ($array as $value) {
        if (is_dir($base . $value)) {
            $data[] = $base . $value . '/';
            $data = rscandir($base . $value . '/', $data);
        } elseif (is_file($base . $value)) {
            $data[] = $base . $value;
        }
    }
    return $data;
}

function check_folder($folder)
{
    if (is_dir($folder)) {
        return true;
    }

    return false;
}

$pathdir = rscandir("site/");
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set("Europe/Kiev");
$archive_dir = "backups/";
$zipname = $archive_dir . "b_" . time() . ".zip";
$zip = new ZipArchive();

if (!check_folder($archive_dir)) {
    mkdir($archive_dir);
}

if ($zip->open($zipname, ZIPARCHIVE::CREATE)) {
    foreach ($pathdir as $key => $value) {
        if (!is_dir($value)) {
            echo "Добавляем в архив файл " . $value . " размером " . filesize($value) . "<br />";
            $zip->addFile($value, $value);
        }
    }
    $zip->close();
    echo 'Файлы добавлены в архив';
} else {
    echo "Ошибка открытия файла архива!";
}
