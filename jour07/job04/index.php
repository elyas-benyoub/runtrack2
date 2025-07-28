<?php

require_once "../../ressources/navigation.php";

function calcul($a, $operator, $b) {
    switch ($operator) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '/':
            return $a / $b;
        case '*':
            return $a * $b;
        case '%':
            return $a % $b;
        default:
            return "Opérateur incorrecte.";
    }
}

$a = 2;
$b = 3;
$operator = "+";

echo "$a $operator $b = " . calcul($a, $operator, $b);