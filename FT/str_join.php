<?php

function ft_str_join($array, $sep = "")
{
    $str = "";

    $i = 0;

    while (isset($array[$i])) {
        $str .= $array[$i];

        if (isset($array[$i + 1]))
            $str .= $sep;
        $i++;
    }

    return $str;
}
