<h1>Jour03 > Job02</h1>
<a href="../job01/index.php">prev</a>
<a href="../job03/index.php">next</a>
<br /><br />

<?php

include_once "../../functions.php";

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

$i = 0;

while (isset($str[$i])) {
    if (ft_isEven($i)) {
        echo "$str[$i]";
    }
    $i++;
}
