<?php

function ft_is_alpha($char)
{
    if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z')) {
        return true;
    }

    return false;
}
