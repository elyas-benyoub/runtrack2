<?php

function ft_strtolower($str)
{
    $alpha_lower = [];
    $alpha_upper = [];
    $alpha_tab = [];

    $maj = 'A';
    $min = 'a';

    while ($min !== 'aa') {
        $alpha_lower[] = $min++;
        $alpha_upper[] = $maj++;
    }

    $min = 'a';
    $maj = 'A';

    while ($min !== "aa") {
        $alpha_tab[$maj++] = $min++;
    }

    $alpha_tab['É'] = 'é';
    $alpha_tab['È'] = 'è';
    $alpha_tab['Ê'] = 'ê';
    $alpha_tab['Ë'] = 'ë';
    $alpha_tab['Ù'] = 'ù';

    for ($i = 0; isset($str[$i]); $i++) {
        foreach ($alpha_tab as $maj => $min) {
            if ($maj === $str[$i])
                $str[$i] = $min;
        }
    }

    return $str;
}
