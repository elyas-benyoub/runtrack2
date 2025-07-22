<h1>D2 > J3</h1>
<a href="../job02/index.php">prev</a>
<a href="../job04/index.php">next</a>
<br /><br />

<?php

$i = 0;

while ($i <= 100) {
    if ($i >= 0 && $i <= 20) {
        echo "<i>$i</i><br />";
    } else if ($i >= 25 && $i <= 50) {
        echo "<u>$i</u><br />";
    } else {
        echo "$i<br />";
    }

    $i++;
}