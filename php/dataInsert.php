<?php

if (
    isset($_GET["fname"]) &&
    isset($_GET["lname"]) &&
    isset($_GET["age"]) &&
    !empty(trim($_GET["fname"])) &&
    !empty(trim($_GET["lname"])) &&
    !empty(trim($_GET["age"]))
) {

    require_once("db_conn/conn.php");

    $conn = connect();

    if ($conn->connect_error) {
        $errMsg = urlencode("Errore di sistema, riprovate più tardi.");
        header("Location:errorPage.php?error=$errMsg&url_sent=../index.php&errno=1");
    }


    $fname = trim($_GET["fname"]);
    $lname = trim($_GET["lname"]);
    $age = intval($_GET["age"]);
    $query = "INSERT INTO Studente (nome, cognome, età) VALUES ($fname, $lname, $age);";

    $res = $conn->query($query);

    if($res == false){
        // $errMsg = urlencode("Errore nell'inserimento, riprovate più tardi.");
        // header("Location:errorPage.php?error=$errMsg&url_sent=init.php&errno=2");
        echo("sei qui $fname $lname $age");
        echo(gettype($fname));
        echo(gettype($lname));
        echo(gettype($age));
    }else{
        echo ("<link rel='stylesheet' href='../style/style.css'>");
        echo ("<div id=error-section>");
        echo ("<p id='error-paragraph'><b>");
        echo ("L'inserimento è andato a buon fine!");
        echo ("</b></p>");
        echo ("<a href='init.php'>");
        echo ("<button id='error-button'>");
        echo ("Back to the home");
        echo ("</button>");
        echo ("</a>");
        echo ("</div>");
    }

}
