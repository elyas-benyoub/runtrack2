<?php

function drawRowRectangle($width, $height, $y, $top) {
    $i = 0;

    while ($i < $width) {
        if ($i === 0 || $i === $width - 1) {
            if ($y === 0 && $top) echo '&nbsp;';
            elseif ($y === $height) echo '|';
            else echo '|';
        } else {
            if ($y === 0 && $top) echo '_';
            elseif ($y === $height - 1) echo '_';
            else echo '&nbsp;';
        }

        $i++;
    }
    echo "<br />";
}

function drawRectangle($width, $height, $top = true) {
    $top && $height++;
    
    echo "<pre>";

    for ($y = 0; $y < $height; $y++) {
        drawRowRectangle($width, $height,$y, $y === 0 && $top);
    }

    echo "</pre>";
}

?>

<style>
    pre {
        margin: 0;
    }
</style>
