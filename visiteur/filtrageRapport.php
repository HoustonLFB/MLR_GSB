<?php
session_start();
include("../includes/connexionbdd.inc.php");

//RECUP INFOS
$IDuser = $_SESSION['IDuser'];

$affRap = $_POST["affRap"];

$reqSQLconsultPra = "SELECT * FROM praticiens";
$resBDpra = $connexion->query($reqSQLconsultPra);
$praAll = $resBDpra->fetchAll();

//AFFICHAGE DES SIENS OU TOUS
switch ($affRap) {
    case "1": //les siens
        $reqSQLFiltrage = "SELECT * FROM rapportVisite WHERE visMatricule='$IDuser'";
        break;
    default: //TOUS
        $reqSQLFiltrage = "SELECT * FROM rapportVisite WHERE 1";
        break;
}

$choixPra = $_POST['choixPra'];

//rajout choix praticien
if (!empty($choixPra)) {
    $reqSQLFiltrage .= " AND praID ='$choixPra'";
}




$_SESSION['reqSQLConsult'] = $reqSQLFiltrage;
header("Location: consultRapport.php");
