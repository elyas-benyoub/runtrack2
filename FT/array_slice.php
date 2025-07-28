<?php

function ft_array_slice($array, $offset, $length = null)
{
    $tab = [];
    $array_len = ft_count($array);

    if ($offset < 0) {
        $offset = $array_len + $offset;
        if ($offset < 0) $offset = 0;
    }

    if (!isset($length)) {
        $length = $array_len - $offset;
    }

    if ($length < 0) {
        $length = ($array_len + $length) - $offset;
    }

    $i = 0;

    while (isset($array[$i]) && $i < $length) {
        $tab[] = $array[$i];
        $i++;
    }

    return $tab;
}
