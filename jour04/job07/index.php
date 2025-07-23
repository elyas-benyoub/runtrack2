<h1>Jour04 > Job07</h1>
<a href="../job06/index.php">prev</a>
<br /><br />

<?php

require_once "../../geometry.php";
require_once "../../functions.php";

$data = ft_count($_GET) > 0 ? $_GET : $_POST;
$height = $data["height"] ?? null;


?>

<form action="index.php">
    <label for="height">Hauteur</label>
    <input type="number" name="height" id="height">
    <button type="submit">Générer</button>
</form>

<?php

if (isset($height)) {
    drawTriangle($height, $widht = $height * 2, false);
    drawRectangle($width = $height * 2, $height);
}

