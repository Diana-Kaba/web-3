<?php

require_once "group.php";

$image = imagecreatetruecolor(300, 300);

$colors = [
    $darkred = imagecolorallocate($image, 0x90, 0x00, 0x00),
    $gray = imagecolorallocate($image, 0xC0, 0xC0, 0xC0),
    $navy = imagecolorallocate($image, 0x00, 0x00, 0x80),
];

$gradesCount = [0, 0, 0];

foreach ($students as $student) {
    foreach ($student['marks'] as $subject => $mark) {
        if ($mark === 3) {
            $gradesCount[0]++;
        } elseif ($mark === 4) {
            $gradesCount[1]++;
        } elseif ($mark === 5) {
            $gradesCount[2]++;
        }
    }
}

$totalStudents = count($students);
$angles = [];

foreach ($gradesCount as $count) {
    $angle = 360 * $count / $totalStudents;
    $angles[] = $angle;
}

$start = 0;
foreach ($angles as $i => $angle) {
    $color = $colors[$i];
    imagefilledarc($image, 150, 150, 300, 300, $start, $start + $angle, $color, IMG_ARC_PIE);
    $start += $angle;
}

header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
