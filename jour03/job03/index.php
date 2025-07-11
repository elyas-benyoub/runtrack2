<?php

$str = "I'm sorry Dave I'm afraid I can't do that";

function isVowel($c) {
    $vowel = ['a', 'e', 'i', 'y', 'o', 'u', 'A', 'E', 'I', 'Y', 'O', 'U'];
    foreach ($vowel as $v) {
        if ($c === $v) return true;
    }
    return false;
}

for($i = 0; $i < strlen($str); $i++) {
    if (isVowel($str[$i])) echo "$str[$i]";
}
