<?php
session_start();

require_once "../../FT/is_in_array.php";
require_once "../../FT/strlen.php";

$firstname = '';

if (isset($_GET["reset"])) { // si reset existe on cree un tableau vide dans session
    $_SESSION["nameList"] = [];
}

if (isset($_GET['firstname'])) { // on cree la variable firstname recupere dans get
    $firstname = $_GET['firstname'];
}

if (isset($_SESSION['nameList'])) {
    if (!ft_is_in_array($_SESSION['nameList'], $firstname)) // verifie les doublons
        ft_strlen($firstname) > 3 && $_SESSION['nameList'][] = $firstname; // enregistre si plus de 3 caracteres
} else {
    $_SESSION['nameList'] = []; // si pas de tableau, on le recree =>> secu
}

require_once "../../ressources/navigation.php";

?>

<form action="index.php" method="get">
    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" id="firstname" min="3" autofocus>
    <button type="submit">Ajouter</button>
</form>

<form action="index.php" method=""get>
    <button type="submit" name="reset">Reset</button>
</form>

<ul>
    <?php foreach ($_SESSION['nameList'] as $item): ?>
        <li><?= $item ?></li>
    <?php endforeach ?>
</ul>