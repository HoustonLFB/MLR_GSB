<?php
session_start();

include('connexionBdd.php');

$userid = $_POST['userlog'];
$userpass = $_POST['userpass'];

$reqSQLlogin = "SELECT * FROM compte WHERE user='$userid'";
$resultatDB = $connexion->query($reqSQLlogin);

$ligneDB = $resultatDB->fetch();
$passBD = $ligneDB[1];
$IDuser = $ligneDB[2];
$NIVuser = $ligneDB[3];

$ok = password_verify($userpass, $passBD);

if ($ok) {
    //VARIABLES DE SESSION DES INFOS DE L'USER
    $_SESSION['logged'] = True;
    $_SESSION['IDuser'] = $IDuser;
    $_SESSION['NIVuser'] = $NIVuser;
    header("Location: /redirection.php");
} else {
    header("Location: /index.php");
}
