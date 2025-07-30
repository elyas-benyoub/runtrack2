<?php
session_start();

require_once "../../FT/is_in_array.php";
require_once "../../FT/strlen.php";

$firstname = '';

if (isset($_GET["reset"])) {
    $_SESSION["nameList"] = [];
}

if (isset($_GET['firstname'])) {
    $firstname = $_GET['firstname'];
}

if (isset($_SESSION['nameList'])) {
    if (!ft_is_in_array($_SESSION['nameList'], $firstname)) 
        ft_strlen($firstname) > 3 && $_SESSION['nameList'][] = $firstname;
} else {
    $_SESSION['nameList'] = [];
}

require_once "../../ressources/navigation.php";

?>

<form action="index.php">
    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" id="firstname" min="3" autofocus>
    <button type="submit">Ajouter</button>
</form>

<form action="index.php">
    <button type="submit" name="reset">Reset</button>
</form>

<ul>
    <?php foreach ($_SESSION['nameList'] as $item): ?>
        <li><?= $item ?></li>
    <?php endforeach ?>
</ul>