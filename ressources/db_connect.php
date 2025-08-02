<?php

function db_connect()
{
    if ($_SERVER['HTTP_HOST'] === 'localhost:8888') {
        return new mysqli("localhost", "root", "root", "jour09");
    } else {
        return new mysqli("localhost", "elyas-benyoub", "5Scbdpfttpmlr!", "elyas-benyoub_jour09");
    }
}