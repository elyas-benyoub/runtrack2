<?php

require_once "../../ressources/navigation.php";

$i = 0;

while ($i <= 100) {
    if ($i >= 0 && $i <= 20) {
        echo "<i>$i</i><br />";
    } else if ($i >= 25 && $i <= 50) {
        echo "<u>$i</u><br />";
    } else {
        echo "$i<br />";
    }

    $i++;
}