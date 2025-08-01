<?php 

require_once "../../ressources/navigation.php";

$contenu = file_get_contents('job08.sql');
echo "<pre>" . htmlspecialchars($contenu) . "</pre>";

