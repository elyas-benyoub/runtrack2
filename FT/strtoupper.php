<?php

require_once "../../ft/get_alpha.php";

function ft_strtoupper($str)
{
    $alpha_tab = [];
    $alpha_lower = ft_get_alpha();
    $alpha_upper = ft_get_alpha(true);


    $min = 'a';
    $maj = 'A';

    while ($min !== "aa") {
        $alpha_tab[$min++] = $maj++;
    }

    $alpha_tab['é'] = 'É';
    $alpha_tab['è'] = 'È';
    $alpha_tab['ê'] = 'Ê';
    $alpha_tab['ë'] = 'Ë';
    $alpha_tab['ù'] = 'Ù';

    for ($i = 0; isset($str[$i]); $i++) {
        foreach ($alpha_tab as $min => $maj) {
            if ($min === $str[$i])
                $str[$i] = $maj;
        }
    }

    return $str;
}
