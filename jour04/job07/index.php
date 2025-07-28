<?php

require_once "../../ressources/navigation.php";
require_once "../../GEO/drawRectangle.php";
require_once "../../GEO/drawTriangle.php";
require_once "../../FT/count.php";

$data = ft_count($_GET) > 0 ? $_GET : $_POST;
$height = $data["height"] ?? '0';


?>

<form action="index.php">
    <label for="height">Hauteur</label>
    <input type="number" name="height" id="height" min="0" value="5">
    <button type="submit">Générer</button>
</form>

<?php

if (isset($height)) {
    drawTriangle($height, $width = $height * 2, true);
    drawRectangle($width = $height * 2, $height, false);
}

