<h1>Jour04 > Job06</h1>
<a href="../job05/index.php">prev</a>
<a href="../job07/index.php">next</a>
<br /><br />

<?php
require_once "../../functions.php";

$nbr = null;

if (ft_count($_GET) > 0) {
    $nbr = $_GET["number"] ?? null;
    if (ft_isInteger($nbr)) {
        $nbr = ft_putnbr($nbr);
        $message = "$nbr : " . (ft_isEven($nbr) ? "Nombre pair" : "Nombre impair");
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
