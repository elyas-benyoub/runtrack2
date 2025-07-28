<?php

function ft_split_html_entities($str)
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
