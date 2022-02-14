<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci studente</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>

    <div id="insert-section">
        <?php
        require_once("db_conn/conn.php");

        $conn = connect();

        if ($conn->connect_error) {
            $errMsg = urlencode("Errore di sistema, riprovate più tardi.");
            header("Location:errorPage.php?error=$errMsg&url_sent=../index.php&errno=1");
        }

        ?>
        <form action="dataInsert.php" method="get">
            <label for="fname" id="general-label">Nome: </label><input type="text" name="fname" id="general-input">
            <br>
            <label for="lname" id="general-label">Cognome: </label><input type="text" name="lname" id="general-input">
            <br>
            <label for="age" id="general-label">Età: </label><input type="number" name="age" id="general-input" min=0 max=120>
            <br>
            <input type="reset" value="Reset" id="reset-input">
            <input type="submit" value="Conferma" id="submit-input">
        </form>
        <a href="init.php"><button id="submit-input">Back</button></a>
        <a href="logout.php"><button id="submit-input">Logout</button></a>
    </div>

</body>

</html>