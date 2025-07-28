<?php

function ft_str_split($str, $sep = null)
{
    $i = 0;
    $tab = [];

    if (!isset($str))
        return null;

    while (isset($str[$i])) {
        if (isset($sep)) {
            $thunk = "";
            while (isset($str[$i]) && $str[$i] !== $sep) {
                $thunk .= $str[$i];
                $i++;
            }
            $thunk && $tab[] = $thunk;
        } else
            $tab[$i] = $str[$i];
        $i++;
    }

    return $tab;
}