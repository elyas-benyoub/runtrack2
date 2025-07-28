<?php

require_once "../../ressources/navigation.php";
require_once "../../FT/strlen.php";
require_once "../../FT/is_vowel.php";

$str = "I'm sorry Dave I'm afraid I can't do that";

for ($i = 0; $i < ft_strlen($str); $i++) {
    if (ft_is_vowel($str[$i]))
        echo "$str[$i]";
}
