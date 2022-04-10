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

//VERIF VALIDITE date
if ($dateVisite > (date('Y-m-c H:i:s'))) {
    header('Location: rapportForm.php');
    $_SESSION['erreurDateMsg'] = True;
    exit();
}
//VERIF DOUBLE PRODUIT
if ($medoc1 == $medoc2) {
    header('Location: rapportForm.php');
    $_SESSION['erreurDoubleProd'] = True;
    exit();
}

//CREATION de la requete
$reqSQLinto = "INSERT INTO rapportVisite VALUES (NULL, '$IDuser', $praID, now(), '$dateVisite', '$rapBilan', '$rapMotif', '$medoc1', '$medoc2', $coefConf);";

$connexion->exec($reqSQLinto);

header('Location: rapportForm.php');
