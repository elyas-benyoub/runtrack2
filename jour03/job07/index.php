<h1>Jour03 > Job07</h1>
<a href="../job06/index.php">prev</a>
<a href="../../jour04/job01/index.php">next</a>
<br /><br />

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "../../functions.php";

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$str_array = ft_str_split($str);
$str_new = "";

$i = 1;

while (isset($str_array[$i])) {
    $str_new  .= $str_array[$i];
    $i++;
}

$str_new .= $str_array[0];

$i = 0;

echo $str_new;
