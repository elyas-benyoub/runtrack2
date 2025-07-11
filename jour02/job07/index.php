<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$height = 50;
$width = $height * 2;


function drawRow($width, $y) {
    $i = 0;
    $start = $width / 2 - $y - 1;
    $end = $width / 2 + $y;

    while ($i < $width) {
        if ($i === $start) echo "/";
        elseif ($i === $end) echo "\\";
        elseif ($i > $start && $i < $end) echo "&nbsp;";
        else echo "&nbsp;";
        
        $i++;
    }

    echo "<br />";
}

echo "<pre>";

$i = 0;

while ($i < $height) {
    drawRow($width, $is);
    $i++;
}

$i = 0;

while ($i < $width) {
    echo "-";
    $i++;
}

echo "</pre>";
