<?php

    include 'func.php';
    include 'cookieHandler.php';

    if(
        isset($_POST["username"]) && 
        isset($_POST["password"]) && 
        !empty(trim($_POST["username"])) && 
        !empty(trim($_POST["password"]))
    ){
        $user = trim($_POST["username"]);
        $pw = trim($_POST["password"]);
        $res = checkCreds($user, $pw);
        if($res == true){
            mySetCookie($user);
            header("Location:init.php?user=$user");
        }else{
            $errMsg = urlencode("Errore, le credenziali inserite non sono corrette");
            header("Location:errorPage.php?error=$errMsg&url_sent=../index.php");
        }
    }else{
        $errMsg = urlencode("Errore, le credenziali non sono state inserite");
        header("Location:errorPage.php?error=$errMsg&url_sent=../index.php");
    }
