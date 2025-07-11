<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$str = "Les choses que l'on possède finissent par nous posséder.";
$str_array = mb_str_split($str, 1, "UTF-8");

for ($i = count($str_array) - 1; $i >= 0; $i--) {
    echo $str_array[$i];
}
