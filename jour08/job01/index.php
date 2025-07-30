<?php
session_start();

$_SESSION["nbvisites"] = ($_SESSION["nbvisites"] ?? 0) + 1;


if (isset($_GET["reset"])) {
    $_SESSION["nbvisites"] = 0;
    $new_url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    header("Location: $new_url");
    exit;
}

$message = "Nombre de visites : " . $_SESSION["nbvisites"];

?>

<?php require_once "../../ressources/navigation.php"; ?>


<p><?= $message ?></p>
<form action="index.php">
    <button type="submit" name="reset">Reset</button>
</form>
