<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina iniziale</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <div id="initial-section">

        <?php
        require_once("cookieHandler.php");

        $user = "ospite";
        $res = myReadCookie();

        if ($res != false) {
            $user = $res;
        }

        echo ("<h3>Benvenutə $user!</h3>");
        ?>

        <a href="insert.php"><button id="submit-input">Inserisci studente</button></a><br>
        <a href=""><button id="submit-input">Modifica studente</button></a><br>
        <a href=""><button id="submit-input">Elimina studente</button></a><br>
        <a href=""><button id="submit-input">Visualizza studenti</button></a><br>

        <a href="logout.php"><button id="submit-input">Logout</button></a>

    </div>
</body>

</html>