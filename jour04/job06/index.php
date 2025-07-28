<?php

require_once "../../ressources/navigation.php";
require_once "../../FT/count.php";
require_once "../../FT/is_integer.php";
require_once "../../FT/putnbr.php";
require_once "../../FT/is_even.php";



$nbr = null;

if (ft_count($_GET) > 0) {
    $nbr = $_GET["number"] ?? null;
    if (ft_is_integer($nbr)) {
        $nbr = ft_putnbr($nbr);
        $message = "$nbr : " . (ft_is_even($nbr) ? "Nombre pair" : "Nombre impair");
    } else {
        $message = "Entrez un nombre entier.";
    }
} else {
    $message = "";
}

?>

<form action="index.php" method="GET">
    <label for="number">Enter a number</label>
    <input type="text" name="number" id="number" value="<?= $nbr ?? "" ?>">
    <button type="submit">Verifier</button>
    <p><?= $message ?></p>
</form>