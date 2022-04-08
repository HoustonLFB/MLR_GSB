<?php
session_start();

include("../includes/connexionbdd.inc.php");

//RECUP INFO
$IDuser = $_SESSION['IDuser'];
$praID = $_POST['praticienChoix'];
$dateVisite = $_POST['dateVisite'];
$rapBilan = $_POST['rapBilan'];
$rapMotif = $_POST['motif'];
$medoc1 = $_POST['medoc1'];
$medoc2 = $_POST['medoc2'];
$coefConf = $_POST['coefConf'];

//CREATION de la requete
$reqSQLinto = "INSERT INTO rapportVisite VALUES (NULL, '$IDuser', $praID, now(), '$dateVisite', '$rapBilan', '$rapMotif', '$medoc1', '$medoc2', $coefConf);";

$connexion->exec($reqSQLinto);

header('Location: rapportForm.php');
