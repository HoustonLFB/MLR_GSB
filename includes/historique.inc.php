<?php
//CE SCRIPT RENVOIE L'URL OU SE SITUE LE USER ET SON IP

//include("../includes/connexionbdd.inc.php");

$IP = $_SERVER['REMOTE_ADDR'];
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$reqSQLhistorique = "INSERT INTO historique VALUES ('$IP', '$url', now())";
$connexion->exec($reqSQLhistorique);
