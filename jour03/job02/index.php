<?php

require_once "../../ressources/navigation.php";

require_once "../../FT/is_even.php";

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

$i = 0;

while (isset($str[$i])) {
    if (ft_is_even($i)) {
        echo "$str[$i]";
    }
    $i++;
}
