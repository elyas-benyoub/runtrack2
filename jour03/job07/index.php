<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$str = mb_strtolower($str);
$str_array = mb_str_split($str);
$str_new = [];
$charTemp = $str_array[0];

$i = 1;

while ($i < count($str_array)) {
    $str_new[$i - 1] = $str_array[$i];
    $i++;
}

$str_new[count($str_array)] = $charTemp;
$str_new[0] = mb_strtoupper($str_new[0]);
$str_new = implode($str_new);

echo $str_new;
