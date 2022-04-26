<?php
session_start();

include('../includes/connexionbdd.inc.php');

foreach ($_POST['supprChecked'] as $occ) {
    $reqSQLsuppr = "DELETE FROM `rapportVisite` WHERE rapID = '$occ' ";

    $connexion->exec($reqSQLsuppr);
}

if (count($_POST['supprChecked']) == 1) {
    header("Location: consultRapport.php");
    $_SESSION['supprDone'] = True;
    exit;
}

if (count($_POST['supprChecked']) > 1) {
    header("Location: consultRapport.php");
    $_SESSION['supprMultiDone'] = True;
    exit;
}
