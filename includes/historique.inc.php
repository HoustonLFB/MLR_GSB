<?php
//CE SCRIPT RENVOIE L'URL OU SE SITUE LE USER ET SON IP

include('connexionbdd.inc.php');

$IP = $_SERVER['REMOTE_ADDR'];
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$reqSQL = "INSERT INTO historique VALUES ('$IP', '$url')";

$connexion->exec($reqSQL);

$connexion = null;