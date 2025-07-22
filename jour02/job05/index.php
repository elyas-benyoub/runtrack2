<h1>D2 > J5 : Nombres premiers</h1>
<a href="../job04/index.php">prev</a>
<a href="../job06/index.php">next</a>
<br /><br />

<?php

function isPrime($nbr) {
    if ($nbr < 2) return false;
    
    $i = 2;
    while ($i <= sqrt($nbr)) {
        if ($nbr % $i === 0) return false;
        $i++;
    }

    return true;
}

$i = 0;
while ($i <= 1000) {
    if (isPrime($i)) {
        echo "$i<br />";
    }

    $i++;
}
