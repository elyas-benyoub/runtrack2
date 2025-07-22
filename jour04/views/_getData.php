<?php

require_once "../../functions.php";

$data = ft_count($_GET) > 0 ? $_GET : $_POST;

echo "Nombre d'arguments : " . ft_count($data) . "<br />";

?>
