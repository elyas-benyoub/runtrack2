<?php

function drawRowTriangle($width, $y) {
    $i = 0;
    $start = $width / 2 - $y - 1;
    $end = $width / 2 + $y;

    while ($i < $width) {
        if ($i === $start) echo "/";
        elseif ($i === $end) echo "\\";
        else echo "&nbsp;";
        
        $i++;
    }

    echo "<br />";
}

function drawTriangle($height, $width, $base = true) {
    $i = 0;
    
    echo "<pre>";
    while ($i < $height - 1) {
        drawRowTriangle($width, $i);
        $i++;
    }
    
    $i = 0;
    echo '/';

    while ($i < $width - 2) {
        echo $base ? "_" : "&nbsp;";
        $i++;
    }

    echo '\\';
    echo "</pre>";
}

function drawRowRectangle($width, $height, $y) {
    $i = 0;

    while ($i < $width) {
        if ($i === 0 || $i === $width - 1) {
            echo $y === 0 || $y === $height - 1 ? '+' : '|';
        } else {
            echo $y === 0 || $y === $height - 1 ? '-' : "&nbsp;";
        }

        $i++;
    }
    echo "<br />";
}

function drawRectangle($width, $height) {
    echo "<pre>";

    for ($y = 0; $y < $height; $y++) {
        drawRowRectangle($width, $height, $y);
    }

    echo "</pre>";
}

?>

<style>
    pre {
        margin: 0;
    }
</style>