<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$str = "Dans l'espace, personne ne vous entend crier";

function ft_strlen($str) {
    $i = 0;

    while (isset($str[$i])) {
        $i++;
    }

    return $i;
}

echo $str . "<br />Nombre de caractères : " . strlen($str);