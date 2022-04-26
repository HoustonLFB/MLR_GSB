<?php
session_start();

include("includes/connexionbdd.inc.php");

//RECUP INFOS DU FORM
$userid = $_POST['userlog'];
$userpass = $_POST['userpass'];

//CREATION ET EXECUTION DE LA COMMANDE SQL
$reqSQLlogin = "SELECT * FROM compte WHERE user='$userid'";
$resultatDB = $connexion->query($reqSQLlogin);

//MISE DU RESULTAT DANS VARIABLE
$ligneDB = $resultatDB->fetch();
//RECUPERATION DES DIFFERENTES INFOS DANS VARIABLE 
$passBD = $ligneDB[1];
$IDuser = $ligneDB[2];
$NIVuser = $ligneDB[3];

//VERIF BON MDP
$ok = password_verify($userpass, $passBD);

if ($ok) {
    //VARIABLES DE SESSION DES INFOS DE L'USER
    $_SESSION['logged'] = True;
    $_SESSION['IDuser'] = $IDuser;
    $_SESSION['NIVuser'] = $NIVuser;

    //AJOUT HISTORIQUE CONNEX BD
    $IP = $_SERVER['REMOTE_ADDR'];
    $reqSQLhistoLog = "INSERT INTO historiqueConnex VALUES ('$IP', '$userid', NULL, 1, now())";
    $connexion->exec($reqSQLhistoLog);

    header("Location: redirection.php");
    exit();
} else {
    $_SESSION['erreurLogMsg'] = True;

    //AJOUT HISTORIQUE CONNEX BD
    $IP = $_SERVER['REMOTE_ADDR'];
    $reqSQLhistoLog = "INSERT INTO historiqueConnex VALUES ('$IP', '$userid','$userpass',0,now())";
    $connexion->exec($reqSQLhistoLog);

    header("Location: index.php");
    exit();
}
