<?php

require_once "../../ressources/db_connect.php";

function ft_query($query)
{
    try {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $mysqli = db_connect();
        $result = $mysqli->query($query);
        $fields = $result->fetch_fields();

    } catch (mysqli_sql_exception $e) {
        echo "Erreur MySQL : " . $e->getMessage();
    }

    return [$fields, $result];
}