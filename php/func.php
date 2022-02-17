<?php

$creds = [
    "user1" => "pw1",
    "user2" => "pw2",
    "user3" => "pw3"
];

function oldCheckCreds($user, $pwd)
{
    global $creds;
    if (array_key_exists($user, $creds) && $creds[$user] == $pwd) {
        return true;
    } else {
        return false;
    }
}

function checkCreds($user, $pwd)
{
    require_once("db_conn/conn.php");

    $conn = connect();

    if ($conn->connect_error) {
        $errMsg = urlencode("Errore di sistema, riprovate più tardi.");
        header("Location:errorPage.php?error=$errMsg&url_sent=../index.php&errno=1");
    }

    $res = $conn->query("SELECT user, pwd FROM creds WHERE user = $user AND pwd = $pwd");

    if($res == false){
        $errMsg = urlencode("Errore di sistema, riprovate più tardi.");
        header("Location:errorPage.php?error=$errMsg&url_sent=../index.php&errno=2");
    }else{
        if($res->num_rows == 1){
            return true;
        }else{
            return false;
        }
    }
}
