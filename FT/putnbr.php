<?php

function ft_putnbr($str)
{
    if (!ft_is_integer($str))
        return null;

    $i = 0;
    $sign = 1;
    $result = 0;

    if ($str[$i] === '+')
        $i++;
    elseif ($str[$i] === '-') {
        $sign *= -1;
        $i++;
    }

    while (isset($str[$i])) {
        $result = $result * 10 + ($str[$i] - '0');
        $i++;
    }

    return $result * $sign;
}
