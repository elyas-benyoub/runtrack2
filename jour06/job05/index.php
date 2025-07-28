<?php

require_once "../../ressources/navigation.php";

$color = $_GET["color"] ?? "style";

require_once "_head.php";

?>

<!DOCTYPE html>
<html lang="en">

<body>
    <form id="form" action="index.php">
        <select name="color" id="color">
            <option value="style">--choisir une couleur--</option>
            <option value="style1">red</option>
            <option value="style2">blue</option>
            <option value="style3">green</option>
        </select>
        <button type="submit">Changer</button>
    </form>
</body>
</html>


