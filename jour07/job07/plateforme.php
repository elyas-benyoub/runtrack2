<?php

require_once "../../FT/str_split.php";
require_once "../../FT/strlen.php";
require_once "../../FT/is_alpha.php";
require_once "../../FT/str_slice.php";
require_once "../../FT/str_join.php";

function plateforme($str)
{
    $tab = ft_str_split($str, " ");
    $char = '';
    $i = 0;

    while (isset($tab[$i])) {
        $len = ft_strlen($tab[$i]);

        if ($len > 0 && !ft_is_alpha($tab[$i][$len - 1])) {
            $char = $tab[$i][$len - 1];
            $tab[$i] = ft_str_slice($tab[$i], 0, -1);
            $tab[$i] = ft_str_join($tab[$i]);
            $len = ft_strlen($tab[$i]);

        }

        if (
            $len >= 2
            && $tab[$i][$len - 2] === 'm'
            && $tab[$i][$len - 1] === 'e'
        ) {
            $tab[$i] .= '_';
            $char && $tab[$i] .= $char;
        }

        $i++;
    }

    return ft_str_join($tab, " ");
}
