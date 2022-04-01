<?php
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
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter - GSB</title>
</head>

<body>
    <header>
        <div class="center">
            <img id="logo" src="assets/img/logo-gsb.png">
        </div>
    </header>
    <div id='login' class='center'>
        <div>
            <img id='user' src='assets/img/user.png'>
        </div>
        <div>
            <input type="text" id="userid" name="name" required minlength="0" maxlength="20">
        </div>
        <div>
            <input type="password" id="motdepasse" name="name" required minlength="0" maxlength="20">
        </div>
        <div id='oublie'>
            <p href="">Mot de passe oublié ?</p>
        </div>
    </div>
    <input type="submit" id='connexion' class='center'>
    CONNEXION
    </div>
</body>

</html>