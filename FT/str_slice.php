<?php

require_once "split_html_entities.php";
require_once "array_slice.php";

function ft_str_slice($str, $offset, $length = null)
{
    $array = ft_split_html_entities($str);

    return ft_array_slice($array, $offset, $length);
}
