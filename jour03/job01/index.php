<?php

require_once "../../ressources/navigation.php";

require_once "../../FT/is_even.php";

$tab = [200, 204, 173, 98, 171, 404, 459];

foreach ($tab as $nbr) {
    if (ft_is_even($nbr)) {
        echo "$nbr est paire<br />";
    } else {
        echo "$nbr est impaire<br />";
    }
}
