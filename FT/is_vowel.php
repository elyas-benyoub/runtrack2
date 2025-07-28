<?php

require_once "remove_accents.php";

function ft_is_vowel($c)
{
    $c = ft_remove_accents($c);
    $vowel = ['a', 'e', 'i', 'y', 'o', 'u', 'A', 'E', 'I', 'Y', 'O', 'U'];
    $i = 0;

    while (isset($vowel[$i])) {
        if ($c === $vowel[$i])
            return true;
        $i++;
    }
    return false;
}
