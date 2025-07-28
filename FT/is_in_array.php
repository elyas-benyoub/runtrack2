<?php

function ft_is_in_array($array, $str)
{
    foreach ($array as $item) {
        if ($str == $item)
            return true;
    }

    return false;
}
