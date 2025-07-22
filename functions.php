<?php

function ft_strlen($str)
{
    $i = 0;

    while (isset($str[$i])) {
        $i++;
    }

    return $i;
}

function ft_isEven($nbr)
{
    return $nbr % 2 === 0;
}

function ft_isVowel($c)
{
    $vowel = ['a', 'e', 'i', 'y', 'o', 'u', 'A', 'E', 'I', 'Y', 'O', 'U'];
    $i = 0;

    while (isset($vowel[$i])) {
        if ($c === $vowel[$i])
            return true;
        $i++;
    }
    return false;
}

function ft_isAlpha($char)
{
    if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z')) {
        return true;
    }

    return false;
}

function ft_str_split($str)
{
    $i = 0;
    $tab = [];

    while (isset($str[$i])) {
        $tab[$i] = $str[$i];
        $i++;
    }

    return $tab;
}

function ft_str_split_entity($str)
{
    $i = 0;
    $tab = [];

    $str = htmlentities($str);

    while (isset($str[$i])) {
        if ($str[$i] === '&') {
            $entity = '';

            while (isset($str[$i]) && $str[$i] !== ';') {
                $entity .= $str[$i++];
            }

            if (isset($str[$i]) && $str[$i] === ';') {
                $entity .= $str[$i++];
            }

            $tab[] = $entity;
        } else {
            $tab[] = $str[$i++];
        }
    }

    return $tab;
}

function ft_count($array)
{
    $i = 0;

    foreach ($array as $item) {
        $i++;
    }

    return $i;
}

function ft_isInteger($str)
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

function ft_putnbr($str)
{
    if (!ft_isInteger($str))
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