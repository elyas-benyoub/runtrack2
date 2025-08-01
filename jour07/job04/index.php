<?php

require_once "../../ressources/navigation.php";

function calcul($a, $operator, $b)
{
    if (($operator === '/' || $operator === '%') && $b == 0) {
        return "Erreur : division par zéro.";
    }
    
    return match ($operator) {
        '+' => $a + $b,
        '-' => $a - $b,
        '/' => $a / $b,
        '*' => $a * $b,
        '%' => $a % $b,
        default => "Opérateur incorrecte.",
    };
}

$a = 2;
$b = 3;
$operator = "+";

echo "$a $operator $b = " . calcul($a, $operator, $b);