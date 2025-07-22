<h1>D2 > J1</h1>
<a href="../job02/index.php">next</a>
<br /><br />

<?php

$i = 0;
$last = 1337;

while ($i < $last + 1) {
    if ($i === 42) {
        echo "<u><b>$i</b></u><br>";
    } else {
        echo  "$i<br>";
    }

    $i++;
}
