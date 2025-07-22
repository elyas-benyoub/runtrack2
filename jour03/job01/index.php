<h1>Jour03 > Job01</h1>
<a href="../../jour02/job07/index.php">prev</a>
<a href="../job02/index.php">next</a>
<br /><br />

<?php

include_once "../../functions.php";

$tab = [200, 204, 173, 98, 171, 404, 459];

foreach ($tab as $nbr) {
    if (ft_isEven($nbr)) {
        echo "$nbr est paire<br />";
    } else {
        echo "$nbr est impaire<br />";
    }
}
