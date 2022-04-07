<?php
//OUVERTURE SESSION 
session_start();

include('/includes/historique.inc.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="http://gsb.wilfriedlefebvre.fr/assets/css/css.css">
    <script type="text/javascript" language="JavaScript" src="http://gsb.wilfriedlefebvre.fr/assets/js/js.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="http://gsb.wilfriedlefebvre.fr/assets/img/favicon.ico"/>
    <title>Se connecter - GSB</title>
</head>

<body>
    <header>
        <div class="center">
            <img id="logo" src="/assets/img/logo-gsb.png">
        </div>
    </header>
    <form name="connexform" action="http://mlr-gsb.site/login.php" method="POST">
        <div id='login' class='center'>
            <div>
                <img id='user' src='/assets/img/user.png'>
            </div>
            <div>
                <input type="text" id="userlog" name="userlog" required minlength="0" maxlength="20">
            </div>
            <div>
                <input type="password" id="userpass" name="userpass" required minlength="0" maxlength="20">
            </div>
            <div id='oublie'>
                <p href="">Mot de passe oublié ?</p>
            </div>
        </div>
        <input type="submit" id='connexion' class='center' value="CONNEXION">
    </form>
</body>

</html>