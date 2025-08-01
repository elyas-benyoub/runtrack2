<?php

require_once "../../FT/atoi.php";

$nbvisites = null;

if (isset($_GET["reset"])) {
    setcookie("nbvisites", '', time() - 3600);
    header("Location: $_SERVER[PHP_SELF]");
    exit;
}

if (isset($_COOKIE["nbvisites"])) { // si un cookie existe
    $nbvisites = ft_atoi($_COOKIE["nbvisites"]) + 1; // on l'enregistre en l'incrementant (decalage !!)
    setcookie("nbvisites", $nbvisites); // on actualise le cookie
} else {
    setcookie("nbvisites", 1, time() + 60); // s'il exite pas on le crée pour la premiere visite
    $nbvisites = 1;
}

$message = "Nombre de visites :&nbsp;" . $nbvisites ?? '0';

?>

<?php require_once "../../ressources/navigation.php"; ?>

<p><?= $message ?></p>
<form action="index.php" method="get">
    <button type="submit" name="reset">Reset</button>
</form>
