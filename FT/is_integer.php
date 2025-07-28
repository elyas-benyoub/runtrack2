<?php

function ft_is_integer($str)
{
    $has_digit = false;
    $i = 0;

    if (isset($str[$i]) && ($str[$i] === '+' || $str[$i] === '-'))
        $i++;

    while (isset($str[$i])) {
        if ($str[$i] >= '0' && $str[$i] <= '9')
            $has_digit = true;
        else
            return false;
        $i++;
    }

    return $has_digit;
}
