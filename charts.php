<?php

require_once "group.php";

$image = imagecreatetruecolor(100, 100);

$white = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$gray = imagecolorallocate($image, 0xC0, 0xC0, 0xC0);
$navy = imagecolorallocate($image, 0x00, 0x00, 0x80);
$red = imagecolorallocate($image, 0xFF, 0x00, 0x00);
$colors = [5 => $red, 4 => $navy, 3 => $gray, 2 => $white];

$average = [];
for ($i = 0; $i < count($students); $i++) {
    $average[] = (int) round(array_sum($students[$i]["marks"]) / count($students[$i]["marks"]));
}

$stat = array_count_values($average);
$unit_deg = 360 / count($students);

$corner = 0;
foreach ($stat as $key => $value) {
    imagefilledarc($image, 50, 50, 100, 100, $corner, $corner + $unit_deg * $value, $colors[$key], IMG_ARC_PIE);
    $corner += $unit_deg * $value;
}

header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
