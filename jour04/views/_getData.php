<?php

require_once "../../FT/count.php";

$data = ft_count($_GET) > 0 ? $_GET : $_POST;
$method = ft_count($_GET) > 0 ? "GET" : "POST";

echo "$method => Nombre d'arguments : " . ft_count($data) . "<br />";

?>
