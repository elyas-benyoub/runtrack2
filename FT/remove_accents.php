<?php

require_once "split_html_entities.php";
require_once "is_in_array.php";
require_once "str_join.php";

function ft_remove_accents($str)
{
    $tab = ft_split_html_entities($str);
    $entities = [
        'àâä' => 'a',
        'ç' => 'c',
        'éèêë' => 'e',
        'îï' => 'i',
        'ôö' => 'o',
        'ùûü' => 'u',
        'ÿ' => 'y',
        'œ' => 'oe',
        'æ' => 'ae',
        'ÀÂÄ' => 'A',
        'Ç' => 'C',
        'ÉÈÊË' => 'E',
        'ÎÏ' => 'I',
        'ÔÖ' => 'O',
        'ÙÛÜ' => 'U',
        'Ÿ' => 'Y',
        'Œ' => 'OE',
        'Æ' => 'AE'
    ];

    $i = 0;

    while (isset($tab[$i])) {
        foreach ($entities as $spec => $ascii) {
            $spec = ft_split_html_entities($spec);
            if (ft_is_in_array($spec, $tab[$i]))
                $tab[$i] = $ascii;
        }
        $i++;
    }

    return ft_str_join($tab, "");
}
