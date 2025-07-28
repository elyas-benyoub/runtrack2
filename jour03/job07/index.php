<?php

require_once "../../ressources/navigation.php";
require_once "../../ft/str_split.php";
require_once "../../ft/strtoupper.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$str_array = ft_str_split($str);
$str_new = "";

$i = 1;

while (isset($str_array[$i])) {
    $str_new .= $str_array[$i];
    $i++;
}

$str_new .= $str_array[0];
$str_new[0] = ft_strtoupper($str_new[0]);

$i = 0;

echo $str_new;
