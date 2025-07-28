<?php

function ft_count($array)
{
    $i = 0;

    foreach ($array as $item) {
        $i++;
    }

    return $i;
}