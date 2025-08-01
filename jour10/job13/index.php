<?php

require_once "../../ressources/navigation.php";
require_once "../controller/ft_query.php";

$query = "select salles.nom as salles_nom, etage.nom as etage_nom from salles inner join etage on etage.id = salles.id_etage";
[$fields, $result] = ft_query($query);

require_once "../views/_create_table.php";
