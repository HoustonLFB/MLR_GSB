<?php
session_start();

include('../includes/connexionbdd.inc.php');

//nombre de rapports
$nbRap = count($_POST['motif']);
$rapAmodifAll = $_SESSION['supprChecked'];

//RECUPERATION DES INFOS de req DB
$reqSQL = "SELECT * FROM `rapportVisite` WHERE rapID = ' ";
if (count($_SESSION['supprChecked']) > 1) {
    $reqSQL .= implode("' OR rapID='", $rapAmodifAll);
    $reqSQL .= "'";
} else {
    $reqSQL .= $_SESSION['supprChecked'][0] . "'";
}

$resSQLrap = $connexion->query($reqSQL);
$rapAllbase = $resSQLrap->fetchAll();


//pour chaque rap modifié
for ($cpt = 0; $cpt < $nbRap; $cpt++) {
    $rapAmodif = $rapAmodifAll[$cpt];

    //RECUPERATION DES INFOS de la modif
    $IDuser = $_SESSION['IDuser'];
    $praID = $_POST['praticien'][$cpt];
    if (isset($_POST['rempla'][$cpt])) {
        $rempla = $_POST['rempla'][$cpt];
    }
    $dateVisite = $_POST['dateVis'][$cpt];
    $rapBilan = $_POST['bilan'][$cpt];
    $rapMotif = $_POST['motif'][$cpt];
    $medoc1 = $_POST['medoc1'][$cpt];
    $medoc2 = $_POST['medoc2'][$cpt];

    if (isset($rempla)) {
        $reqSQLmodifRempla = "UPDATE rapportVisite SET remplaNom='$rempla' WHERE rapID = '$rapAmodif' ";
        $connexion->exec($reqSQLmodifRempla);
    }

    //si changement de praticien
    if ($praID != $rapAllbase[$cpt][2]) {
        $reqSQLmodifPra = "UPDATE rapportVisite SET praID='$praID' WHERE rapID = '$rapAmodif' ";
        $connexion->exec($reqSQLmodifPra);
    }
    //si changement date visite
    if ($dateVisite != $rapAllbase[$cpt][5]) {
        $reqSQLmodifDateVis = "UPDATE rapportVisite SET rapDateVisite='$dateVisite' WHERE rapID = '$rapAmodif' ";
        $connexion->exec($reqSQLmodifDateVis);
    }
    //si changement rap bilan
    if ($rapBilan != $rapAllbase[$cpt][6]) {
        $reqSQLmodifRapBilan = "UPDATE rapportVisite SET rapBilan='$rapBilan' WHERE rapID = '$rapAmodif' ";
        $connexion->exec($reqSQLmodifRapBilan);
    }
    //si changement medoc 1
    if ($medoc1 != $rapAllbase[$cpt][8]) {
        $reqSQLmodifMedoc1 = "UPDATE rapportVisite SET rapProduit1='$medoc1' WHERE rapID = '$rapAmodif' ";
        $connexion->exec($reqSQLmodifMedoc1);
    }
    //si changement medoc 2
    if ($medoc2 != $rapAllbase[$cpt][9]) {
        $reqSQLmodifMedoc2 = "UPDATE rapportVisite SET rapProduit2='$medoc2' WHERE rapID = '$rapAmodif' ";
        $connexion->exec($reqSQLmodifMedoc2);
    }
    // changement date rapport
    $reqSQLmodifDateRap = "UPDATE rapportVisite SET rapDateRapport=now() WHERE rapID = '$rapAmodif' ";
}

unset($_SESSION['supprChecked']);
$_SESSION['modifOk'] = True;
header("Location: consultRapport.php");
