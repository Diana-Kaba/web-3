<?php

require_once "group.php";

$image = imagecreatetruecolor(100, 100);

$white = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$gray = imagecolorallocate($image, 0xC0, 0xC0, 0xC0);
$navy = imagecolorallocate($image, 0x00, 0x00, 0x80);
$red = imagecolorallocate($image, 0xFF, 0x00, 0x00);
$colors = [5 => $red, 4 => $navy, 3 => $gray, 2 => $white];

<<<<<<< HEAD
$average = [];
for ($i = 0; $i < count($students); $i++) {
    $average[] = (int) round(array_sum($students[$i]["marks"]) / count($students[$i]["marks"]));
=======
$chartCenterX = 50;
$chartCenterY = 50;

for ($i = 0; $i < count($students); $i++) {
    foreach ($students[$i] as $key => $value) {
        imagefilledarc($image, $chartCenterX, $chartCenterY - $students[$i]["marks"]["PHP"], 100, 100, 100, 100, $navy, IMG_ARC_PIE);
        imagefilledarc($image, $chartCenterX, $chartCenterY - $students[$i]["marks"]["JS"], 100, 100, 45, 75, $gray, IMG_ARC_PIE);
        imagefilledarc($image, $chartCenterX, $chartCenterY - $students[$i]["marks"]["HTML"], 100, 100, 75, 360, $red, IMG_ARC_PIE);
    }
>>>>>>> dc382ddd4167e01e1603b9a26ccfd15382e13048
}
$stat = array_count_values($average);
$unit_deg = 360 / count($students);

<<<<<<< HEAD
$corner = 0;
foreach ($stat as $key => $value) {
    imagefilledarc($image, 50, 50, 100, 100, $corner, $corner + $unit_deg * $value, $colors[$key], IMG_ARC_PIE);
    $corner += $unit_deg * $value;
}

=======
>>>>>>> dc382ddd4167e01e1603b9a26ccfd15382e13048
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
