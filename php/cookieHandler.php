<?php

function myReadCookie()
{
    if (isset($_COOKIE["username"]) && !empty(trim($_COOKIE["username"]))) {
        return trim($_COOKIE["username"]);
    } else {
        return false;
    }
}

function mySetCookie($user)
{
    setcookie("username", $user, time() + (60 * 60 * 24 * 30), "/");
}

function myDeleteCookie(){
    setcookie("username", null, -1, "/");
}