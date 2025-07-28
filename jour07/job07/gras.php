<?php

require_once "../../FT/str_split.php";
require_once "../../FT/is_upper.php";
require_once "../../FT/count.php";

function gras($str)
{
    $str_bold = "";
    $str_tab = ft_str_split($str, ' ');
    $i = 0;

    while (isset($str_tab[$i])) {
        $word = $str_tab[$i];

        if (ft_is_upper($word[0])) {
            $str_bold .= "<b>$word</b>";
        } else {
            $str_bold .= $word;
        }

        if ($i < ft_count($str_tab))
            $str_bold .= "&nbsp;";

        $i++;
    }

    return $str_bold;
}
