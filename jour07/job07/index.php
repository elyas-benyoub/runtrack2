<?php

require_once "../../ressources/navigation.php";
require_once "gras.php";
require_once "cesar.php";
require_once "plateforme.php";

$text = $_GET["text"] ?? "";
$decale = $_GET["decale"] ?? 0;
$fonction = $_GET['fonction'] ?? null;

$functions = [
    "gras" => fn() => gras($text),
    "cesar" => fn() => cesar($text, $decale),
    "plateforme" => fn() => plateforme($text)
];

?>

<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <form action="index.php" method="get" style="display: flex; flex-direction: column; gap: 1rem; width: 300px;">
        <label for="text">Entrez votre texte : </label>
        <textarea type="text" name="text" id="text"><?= $text ?></textarea>
        <label for="decale">Décalage</label>
        <input type="number" id="decale" name="decale" value="<?= $decale ?>">
        <label for="fonction">Choisissez une fonction pour le text :</label>
        <select name="fonction" id="fonction">
            <option value=""><b>--choix fonction--</b></option>
            <option value="gras"><b>gras</b></option>
            <option value="cesar">cesar</option>
            <option value="plateforme">plateforme</option>
        </select>
        <button type="submit">Modifier</button>
    </form>
    <?php if ($fonction && isset($functions[$fonction])): ?>
        <p><?= $functions[$fonction](); ?></p>
    <?php endif; ?>
</body>

</html>