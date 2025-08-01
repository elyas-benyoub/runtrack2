<?php

require_once "../../ressources/navigation.php";
require_once "../controller/ft_query.php";

$query = "select prenom, nom, naissance from etudiants where year(naissance) >= 1998 and year(naissance) <= 2018";
[$fields, $result] = ft_query($query);

require_once "../views/_create_table.php";
