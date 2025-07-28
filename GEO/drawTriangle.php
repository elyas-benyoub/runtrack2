<?php

function drawRowTriangle($width, $y, $base = false) {
    $i = 0;
    $start = $width / 2 - $y - 1;
    $end = $width / 2 + $y;

    while ($i < $width) {
        if ($i === $start) echo "/";
        elseif ($i === $end) echo "\\";
        elseif ($i > $start && $i < $end) echo $base ? "_" : "&nbsp;";
        else echo "&nbsp;";
        
        $i++;
    }

    echo "<br />";
}

function drawTriangle($height, $width, $base = false) {
    $i = 0;
    
    echo "<pre>";
    while ($i < $height - 1) {
        drawRowTriangle($width, $i, $base);
        $i++;
    }
    
    drawRowTriangle($width, $i, true);
    echo "</pre>";
}

?>

<style>
    pre {
        margin: 0;
    }
</style>
