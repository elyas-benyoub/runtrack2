<?php

function ft_get_index($array, $char)
{
    $i = 0;

    while (isset($array[$i])) {
        if ($array[$i] === $char)
            return $i;
        $i++;
    }
    return -1;
}