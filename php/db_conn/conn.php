<?php

function connect()
{

    require_once("config.php");

    $conn = new mysqli(
        $config["mysql_host"],
        $config["mysql_user"],
        $config["mysql_password"],
        $config["mysql_db"]
    );

    return $conn;
}
