<h1>D2 > J4</h1>
<a href="../job03/index.php">prev</a>
<a href="../job05/index.php">next</a>
<br /><br />

<?php

$i = 1;

while ($i <= 100) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz<br />";
    } else if ($i % 5 === 0) {
        echo "Buzz<br />";
    } else if ($i % 3 === 0) {
        echo "Fizz<br />";
    } else {
        echo "$i<br />";
    }

    $i++;
}