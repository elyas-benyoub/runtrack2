<?php

function ft_strlen($str)
{
    $i = 0;

    while (isset($str[$i])) {
        $i++;
    }

    return $i;
}