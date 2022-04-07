<?php
session_start();

include("/includes/connexionbdd.inc.php");

//RECUP INFOS DU FORM
$userid = $_POST['userlog'];
$userpass = $_POST['userpass'];

//CREATION ET EXECUTION DE LA COMMANDE SQL
$reqSQLlogin = "SELECT * FROM compte WHERE user='$userid'";
$resultatDB = $connexion->query($reqSQLlogin);

$qteRes = $resultatDB -> rowcount();

$connexion = null;

//S'IL N'Y A PAS UNE SEULE LIGNE CA RETOURNE SUR LA PAGE DE LOGIN
//POUR PLUS TARD -----> METTRE MESSAGE D'ERREUR DANS FORM LOGIN INDEX
if ($qteRes !== 1) {
    header("Location: /index.php/");
    exit();
}

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
    header("Location: /redirection.php");
    exit();
} else {
    header("Location: /index.php");
    exit();
}
