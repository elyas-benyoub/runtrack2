<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

function isEven($nbr) {
    if ($nbr % 2 === 0) return true;
    return false;
}

for ($i = 0; $i < strlen($str); $i++) {
    if (isEven($i)) {
        echo "$str[$i]";
    }
}
