<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php

$tab = [200, 204, 173, 98, 171, 404, 459];

function isEven($nbr) {
    if ($nbr % 2 === 0) return true;
    return false;
}

foreach ($tab as $nbr) {
    if (isEven($nbr)) {
        echo "$nbr est paire<br />";
    } else {
        echo "$nbr est impaire<br />";
    }
}
