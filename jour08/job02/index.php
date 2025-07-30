<?php

require_once "../../FT/atoi.php";

$nbvisites = null;

if (isset($_GET["reset"])) {
    $new_url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    setcookie("nbvisites", '', time() - 3600);
    header("Location: $new_url");
    exit;
}

if (isset($_COOKIE["nbvisites"])) {
    $nbvisites = ft_atoi($_COOKIE["nbvisites"]) + 1;
    setcookie("nbvisites", $nbvisites);
} else {
    setcookie("nbvisites", 1, time() + 60);
    $nbvisites = 1;
}

$message = "Nombre de visites :&nbsp;" . $nbvisites ?? '0';

?>

<?php require_once "../../ressources/navigation.php"; ?>

<p><?= $message ?></p>
<form action="index.php" method="get">
    <button type="submit" name="reset">Reset</button>
</form>
