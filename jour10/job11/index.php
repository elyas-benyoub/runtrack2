<?php

require_once "../../ressources/navigation.php";
require_once "../controller/ft_query.php";

$query = "select avg(capacite) as capacite_moyenne from salles";
[$fields, $result] = ft_query($query);

require_once "../views/_create_table.php";
