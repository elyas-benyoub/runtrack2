<?php

require_once "../../ressources/navigation.php";

function leetSpeak($str) {
    $i = 0;

    while (isset($str[$i])) {
        if ($str[$i] === 'a' || $str[$i] === 'A') $str[$i] = '4';
        if ($str[$i] === 'b' || $str[$i] === 'B') $str[$i] = '8';
        if ($str[$i] === 'e' || $str[$i] === 'E') $str[$i] = '3';
        if ($str[$i] === 'g' || $str[$i] === 'G') $str[$i] = '6';
        if ($str[$i] === 'l' || $str[$i] === 'L') $str[$i] = '1';
        if ($str[$i] === 's' || $str[$i] === 'S') $str[$i] = '5';
        if ($str[$i] === 't' || $str[$i] === 'T') $str[$i] = '7';
        if ($str[$i] === 'o' || $str[$i] === 'O') $str[$i] = '0';

        $i++;
    }

    return $str;
}

?>

<form action="index.php">
    <input type="text" name="text" placeholder="Entrez votre text">
    <button type="submit">Traduire</button>
</form>
<p><?= leetSpeak($_GET["text"] ?? null) ?></p>