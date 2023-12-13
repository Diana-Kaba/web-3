<?php

require_once "group.php";

$image = imagecreatetruecolor(100, 100);

$white = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$gray = imagecolorallocate($image, 0xC0, 0xC0, 0xC0);
$darkgray = imagecolorallocate($image, 0x90, 0x90, 0x90);
$navy = imagecolorallocate($image, 0x00, 0x00, 0x80);
$darknavy = imagecolorallocate($image, 0x00, 0x00, 0x50);
$red = imagecolorallocate($image, 0xFF, 0x00, 0x00);
$darkred = imagecolorallocate($image, 0x90, 0x00, 0x00);

$chartCenterX = 50;
$chartCenterY = 50;

for ($i = 0; $i < count($students); $i++) {
    foreach ($students[$i] as $key => $value) {
        imagefilledarc($image, $chartCenterX, $chartCenterY - $students[$i]["marks"]["PHP"], 100, 100, 100, 100, $navy, IMG_ARC_PIE);
        imagefilledarc($image, $chartCenterX, $chartCenterY - $students[$i]["marks"]["JS"], 100, 100, 45, 75, $gray, IMG_ARC_PIE);
        imagefilledarc($image, $chartCenterX, $chartCenterY - $students[$i]["marks"]["HTML"], 100, 100, 75, 360, $red, IMG_ARC_PIE);
    }
}

header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
