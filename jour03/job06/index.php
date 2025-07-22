<h1>Jour03 > Job06</h1>
<a href="../job05/index.php">prev</a>
<a href="../job07/index.php">next</a>
<br /><br />

<?php

include_once "../../functions.php";

$str = "Les choses que l'on possède finissent par nous posséder.";

$splited = ft_str_split_entity($str);

if ($splited !== []) {
    $i = ft_count($splited);

    while ($i > 0) {
        $i--;
        echo $splited[$i];
    }
} else {
    echo "Error : empty array";
}
