<h1>D2 > J6</h1>
<a href="../job05/index.php">prev</a>
<a href="../job07/index.php">next</a>
<br /><br />

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


function displayRow($width, $height, $y) {
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
        displayRow($width, $height, $y);
    }

    echo "</pre>";
}

drawRectangle(20, 10);
