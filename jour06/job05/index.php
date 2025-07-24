<?php
$color = $_GET["color"] ?? "style";
require_once "_head.php";
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <h1>Jour04 > Job07</h1>
    <a href="../../jour04/job07/index.php">prev</a>
    <a href="../jour06/job05/index.php">next</a>
    <br /><br />
    <form action="index.php">
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


