<?php

$creds = [
    "user1" => "pw1",
    "user2" => "pw2",
    "user3" => "pw3"
];

function checkCreds($user, $pw)
{
    global $creds;
    if (array_key_exists($user, $creds) && $creds[$user] == $pw) {
        return TRUE;
    } else {
        return FALSE;
    }
}