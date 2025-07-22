<h1>D2 > J6</h1>
<a href="../job05/index.php">prev</a>
<a href="../job07/index.php">next</a>
<br /><br />

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$x = 20;
$y = 10;

function displayRow($x) {
    $i = 0;

    while ($i < $x) {
        if ($i === 0 || $i === $x - 1) {
            echo "|";
        } else {
            echo "&nbsp;";
        }
        $i++;
    }
    echo "<br />";
}

function displayRowTopBot($x) {
    $i = 0;

    while ($i < $x) {
        if ($i === 0 || $i === $x - 1) {
            echo "+";
        } else {
            echo "-";
        }

        $i++;
    }

    echo "<br />";
}

// Balise pour le style monospace
echo "<pre>";

for ($i = 0; $i < $y; $i++) {
    if ($i === 0 || $i === $y - 1) {
        displayRowTopBot($x);
    } else {
        displayRow($x);
    }
}

echo "</pre>";
