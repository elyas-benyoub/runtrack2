<?php

require_once "../../ressources/navigation.php";
require_once "../controller/ft_query.php";

$query = "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'";
[$fields, $result] = ft_query($query);

require_once "../views/_create_table.php";