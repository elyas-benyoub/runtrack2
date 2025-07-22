<h1>Jour03 > Job03</h1>
<a href="../job02/index.php">prev</a>
<a href="../job04/index.php">next</a>
<br /><br />

<?php

include_once "../../functions.php";

$str = "I'm sorry Dave I'm afraid I can't do that";

for ($i = 0; $i < ft_strlen($str); $i++) {
    if (ft_isVowel($str[$i]))
        echo "$str[$i]";
}
