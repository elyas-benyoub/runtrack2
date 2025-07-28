<?php

function ft_get_alpha($case = false)
{
    $alpha_lower = [];
    $alpha_upper = [];

    $maj = 'A';
    $min = 'a';

    while ($min !== 'aa') {
        $alpha_lower[] = $min;
        $alpha_upper[] = $maj;
        $min++;
        $maj++;
    }

    return $case === true ? $alpha_upper : $alpha_lower;
}
