<?php
//OUVERTURE SESSION 
session_start();

include("includes/historique.inc.php");
include("includes/connexionbdd.inc.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/css.css">
    <script type="text/javascript" language="JavaScript" src="assets/js/js.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/favicon.ico" />
    <title>Se connecter - GSB</title>
</head>

<body>
    <header>
        <div class="center">
            <img id="logo" src="assets/img/logo-gsb.png">
        </div>
    </header>
    <form name="connexform" action="login.php" method="POST">
        <div id='login' class='center'>
            <div>
                <img id='user' src='assets/img/user.png'>
            </div>
            <?php
            if (isset($_SESSION['erreurLogMsg'])) {
                echo "
                <div style='color: red;'>
                    Erreur de connexion. <br>
                    L'identifiant ou le mot de passe est incorrect.
                </div>
                ";
                unset($_SESSION['erreurLogMsg']);
            }
            ?>
            <div>
                <input type="text" id="userlog" name="userlog" required minlength="0" maxlength="20">
            </div>
            <div>
                <input type="password" id="userpass" name="userpass" required minlength="0" maxlength="20">
            </div>
            <div id="oublie">
                <a href="oublie.php">Mot de passe oublié ?</a>
            </div>
        </div>
        <input type="submit" id='connexion' class='center' class="link" value="CONNEXION">
    </form>
</body>

</html>