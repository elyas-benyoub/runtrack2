<h1>D2 > J7</h1>
<a href="../job06/index.php">prev</a>
<a href="../../jour03/job01/index.php">next</a>
<br /><br />

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$height = 10;


function drawRow($width, $y) {
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

function drawTriangle($height, $width) {
    $i = 0;
    
    echo "<pre>";
    while ($i < $height - 1) {
        drawRow($width, $i);
        $i++;
    }
    
    $i = 0;
    echo '/';

    while ($i < $width - 2) {
        echo "_";
        $i++;
    }

    echo '\\';
    echo "</pre>";
}

drawTriangle($height, $width = $height * 2);
