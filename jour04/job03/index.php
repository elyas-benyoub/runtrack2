<?php

require_once "../../ressources/navigation.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$method = "post";
$handleSubmit = "../views/_getData.php";

require_once "../views/_head.php";
require_once "../views/_form.php";
