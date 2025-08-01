<?php

require_once "../../ressources/navigation.php";
require_once "../controller/ft_query.php";

$query = "select * from salles order by capacite desc";
[$fields, $result] = ft_query($query);

require_once "../views/_create_table.php";
