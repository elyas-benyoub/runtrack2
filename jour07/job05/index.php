<?php

require_once "../../ressources/navigation.php";

function occurrences($str, $char) {
    $i = 0;
    $occur = 0;

    while(isset($str[$i])) {
        $str[$i] === $char && $occur++;
        $i++;
    }

    return $occur;
}

$str = "La cigale et la fourmi";
$c = 'a';

echo $str . "<br />";

echo "nombre de $c : " . occurrences($str, $c);