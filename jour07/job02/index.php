<?php

require_once "../../ressources/navigation.php";

$jour = false;

function bonjour($jour) {
    echo $jour ? "Bonjour" : "Bonsoir"; 
}

bonjour($jour);