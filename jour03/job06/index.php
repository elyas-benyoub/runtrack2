<?php

require_once "../../ressources/navigation.php";
require_once "../../FT/split_html_entities.php";
require_once "../../FT/count.php";

$str = "Les choses que l'on possède finissent par nous posséder.";

$splited = ft_split_html_entities($str);

if ($splited !== []) {
    $i = ft_count($splited);

    while ($i > 0) {
        $i--;
        echo $splited[$i];
    }
} else {
    echo "Error : empty array";
}
