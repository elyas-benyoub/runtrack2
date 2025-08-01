<?php 

require_once "../../ressources/navigation.php";

$contenu = file_get_contents('job05.sql');
echo "<pre>" . htmlspecialchars($contenu) . "</pre>";

?>
