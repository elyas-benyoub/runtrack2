<?php

require_once "../../ressources/navigation.php";

$limit = 1337;
$forbiddenNumbers = [26, 37, 1111];

function arraylen($tab) {
    $sum = 0;

    foreach ($tab as $nbr) {
        $sum++;
    }

    return $sum;
}
function isForbidden($nbr, $forbiddenNumbers) {
    $i = 0;

    while ($i < arraylen($forbiddenNumbers)) {
        if ($nbr === $forbiddenNumbers[$i]) {
            return true;
        }
        $i++;
    }

    return false;
}

for($i = 0; $i <= $limit; $i++) {
    if (!isForbidden($i, $forbiddenNumbers)) {
        echo "$i<br>";
    }
}
