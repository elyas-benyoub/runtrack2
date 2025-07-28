<?php

require_once "../../ressources/navigation.php";

$i = 1;

while ($i <= 100) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz<br />";
    } else if ($i % 5 === 0) {
        echo "Buzz<br />";
    } else if ($i % 3 === 0) {
        echo "Fizz<br />";
    } else {
        echo "$i<br />";
    }

    $i++;
}