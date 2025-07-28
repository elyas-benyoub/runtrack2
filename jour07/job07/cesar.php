<?php

require_once "../../FT/remove_accents.php";
require_once "../../FT/is_upper.php";
require_once "../../FT/get_alpha.php";
require_once "../../FT/get_index.php";

function cesar($str, $decale)
{
    $encode = '';
    $str = ft_remove_accents($str);
    $i = 0;

    while (isset($str[$i])) {
        $case = ft_is_upper($str[$i]) ? true : false;
        $alpha = ft_get_alpha($case);
        $alpha_index = ft_get_index($alpha, $str[$i]);
        $j = 0;

        if ($alpha_index === -1) {
            $encode .= $str[$i];
        } else {
            if ($decale < 0) {
                while ($j > $decale) {
                    $alpha_index--;
                    if ($alpha_index < 0)
                        $alpha_index = 25;
                    $j--;
                }
            } else {
                while ($j < $decale) {
                    $alpha_index++;
                    if ($alpha_index >= 26)
                        $alpha_index = 0;
                    $j++;
                }
            }
            $encode .= $alpha[$alpha_index];
        }

        $i++;
    }

    return $encode;
}
