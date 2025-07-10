<?php

$i = 0;
$last = 1337;

while ($i < $last + 1) {
    if ($i === 42) {
        echo "<u><b>$i</b></u><br>";
    } else {
        echo  "$i<br>";
    }

    $i++;
}
