<?php

require_once "../../ressources/navigation.php";

require_once "../../FT/strlen.php";

$str = "Dans l'espace, personne ne vous entend crier";

echo $str . "<br />Nombre de caractères : " . ft_strlen($str);
