<?php

$firstname = null;

if (isset($_GET['firstname'])) {
    $firstname = $_GET['firstname'];
    setcookie('firstname', $firstname, time() + 60);
} elseif (isset($_COOKIE["firstname"])) {
    $firstname = $_COOKIE["firstname"];
}

if (isset($_GET['logout'])) {
    unset($_COOKIE["firstname"]);
    setcookie('firstname', null, time() - 3600);
    $new_url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    header("Location: $new_url");
    exit;
}

?>

<?php require_once "../../ressources/navigation.php"; ?>

<?php if (isset($firstname)): ?>
    <h1>Bonjour, <?= $firstname ?></h1>
    <form action="index.php" method="get">
        <button type="submit" name="logout">Déconnexion</button>
    </form>
<?php else: ?>
    <form action="index.php">
        <label for="firstname">Prénom</label>
        <input type="text" id="firstname" name="firstname">
        <button type="submit">Connexion</button>
    </form>
<?php endif ?>