<?php

require_once "../../ressources/navigation.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../../GEO/drawTriangle.php";

$height = 10;

drawTriangle($height, $width = $height * 2);
