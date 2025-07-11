<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = array(
    "consonnes" => 0,
    "voyelles"  => 0
);

function isVowel($c) {
    $vowel = ['a', 'e', 'i', 'y', 'o', 'u', 'A', 'E', 'I', 'Y', 'O', 'U'];
    foreach ($vowel as $v) {
        if ($c === $v) return true;
    }
    return false;
}

function isAlpha($char) {
    if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z')) {
        return true;
    }

    return false;
}

function sort_alpha(&$dic, $str) {

    $i = 0;

    while (isset($str[$i])) {
        if (isAlpha($str[$i])) {
            if (isVowel($str[$i])) {
                $dic['voyelles'] += 1;
            } else {
                $dic['consonnes'] += 1;
            }
        }

        $i++;
    }
}

sort_alpha($dic,$str);
?>

<table style="border-collapse: collapse; text-align: center" border='2'>
    <thead>
        <tr>
            <td style="padding: .5rem 1rem">consonnes</td>
            <td style="padding: .5rem 1rem">voyelles</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="padding: .5rem"><?php echo $dic['consonnes'] ?></td>
            <td style="padding: .5rem"><?php echo $dic['voyelles'] ?></td>
        </tr>
    </tbody>
</table>
