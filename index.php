<?php
//OUVERTURE SESSION
session_start();


include('connexionBdd.php');

$IP = $_SERVER['REMOTE_ADDR'];
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$reqSQL = "INSERT INTO historique VALUES ('$IP', '$url')";

$connexion->exec($reqSQL);
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    include("/includes/head.inc.php");
    ?>
    <title>Se connecter - GSB</title>
</head>

<body>
    <header>
        <div class="center">
            <img id="logo" src="/assets/img/logo-gsb.png">
        </div>
    </header>
    <form name="connexform" action="login.php" method="POST" onsubmit="verifSaisie()">
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