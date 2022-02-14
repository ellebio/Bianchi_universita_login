<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login università</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div id="login-section">
        <form action="php/login.php" method="post">
            <h2 id="login-title">Login università</h2>
            <label for="username" id="username-label">Username:</label>
            <input type="text" name="username" id="username-input" placeholder="Username">
            <br>
            <label for="password" id="password-label">Password:</label>
            <input type="password" name="password" id="password-input" placeholder="Password">
            <br>
            <input type="reset" value="Reset" id="reset-input">
            <input type="submit" value="Accedi" id="submit-input">
        </form>
        <a href="php/init.php"><input type="button" value="Continua come ospite" id="submit-input"></a>
    </div>
</body>

</html>