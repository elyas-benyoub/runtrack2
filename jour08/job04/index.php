<?php

$firstname = null;


if (isset($_GET['firstname'])) { // si firstname existe, on cree la variable
    $firstname = $_GET['firstname']; // et on cree le cookie pour une minute
    setcookie('firstname', $firstname, time() + 60);
} elseif (isset($_COOKIE["firstname"])) {
    $firstname = $_COOKIE["firstname"]; // ou si le cookie existe on crée la variable
}

if (isset($_GET['logout'])) { // si logout existe on supprime le cookie
    unset($_COOKIE["firstname"]);
    setcookie('firstname', null, time() - 3600);

    header("Location: $_SERVER[PHP_SELF]"); // et on redirige vers l'adresse actuelle sans queries (no loop)
    exit; // on arrete le script sinon le reste sera chargé et execute pour rien.
}

?>

<?php require_once "../../ressources/navigation.php"; ?>

<?php if (isset($firstname)): ?>
    <h1>Bonjour, <?= $firstname ?></h1>
    <form action="index.php" method="get">
        <button type="submit" name="logout">Déconnexion</button>
    </form>
<?php else: ?>
    <form action="index.php" method="get">
        <label for="firstname">Prénom</label>
        <input type="text" id="firstname" name="firstname">
        <button type="submit">Connexion</button>
    </form>
<?php endif ?>
