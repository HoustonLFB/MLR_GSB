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
$coefConf = $_POST['rangeCoef'];

//VERIF SI REMPLACANT
if (!empty($_POST['remplaNom'])) {
    $remplaNom = $_POST['remplaNom'];
}

//VERIF VALIDITE date
if ($dateVisite > (date('Y-m-d'))) {
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

//retrait des carectères problématiques
$rapBilan = str_replace('"', '\"', $rapBilan);
$rapBilan = str_replace("'", "\'", $rapBilan);


//CREATION de la requete
if (empty($remplaNom)) { //SI PAS DE REMPLACANT
    $reqSQLinto = "INSERT INTO rapportVisite VALUES (NULL, '$IDuser', $praID, NULL, now(), '$dateVisite', '$rapBilan', '$rapMotif', '$medoc1', '$medoc2', $coefConf);";
} else { // si ya remplacant
    $reqSQLinto = "INSERT INTO rapportVisite VALUES (NULL, '$IDuser', $praID, '$remplaNom', now(), '$dateVisite', '$rapBilan', '$rapMotif', '$medoc1', '$medoc2', $coefConf);";
}

$connexion->exec($reqSQLinto);

header('Location: rapportForm.php');
$_SESSION['rapAdded'] = True;
