<?php
session_start();

include("../includes/connexionbdd.inc.php");
include("../includes/historique.inc.php");
include("../includes/verifConnexVisit.inc.php");

$reqSQLconsultRap = "SELECT * FROM rapportVisite";
$resBDrapport = $connexion->query($reqSQLconsultRap);
$rapportAll = $resBDrapport->fetchAll();

?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="http://mlr-gsb.site/assets/css/css.css">
    <script type="text/javascript" language="JavaScript" src="http://mlr-gsb.site/assets/js/js.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="http://mlr-gsb.site/assets/img/favicon.ico" />
    <title>Consultation Rapports - GSB</title>

    <style>
        #tableConsultRap {
            border: 1px solid #333;
            text-align: center;
            margin-top: 2%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>

</head>

<body>
    <header>
        <div class="center">
            <img id="logo" src="../assets/img/logo-gsb.png">
        </div>
    </header>

    <table id="tableConsultRap">
        <thead>
            <tr>
                <th colspan="9">Consultation des Rapports de Visites</th>
            </tr>
            <tr>
                <th>Visiteur</th>
                <th>Praticien</th>
                <th>Date Rapport</th>
                <th>Date Visite</th>
                <th>Bilan</th>
                <th>Motif</th>
                <th>Médicament 1</th>
                <th>Médicament 2</th>
                <th>Coefficient</th>
            </tr>
        </thead>
        <?php
        foreach ($rapportAll as $occurence) {
            //MISE EN FORME DE LA DATE
            $dateRapport = date_format(new DateTime($occurence[3]), 'd/m/Y');
            $dateVisite = date_format(new DateTime($occurence[4]), 'd/m/Y');

            //RECUP NOM VISITEURS
            $visMatricule = $occurence[1];
            $reqSQLvisiteur = "SELECT * FROM visiteurs WHERE visMatricule ='$visMatricule'";
            $resBDvisiteur = $connexion->query($reqSQLvisiteur);
            $visiteur = $resBDvisiteur->fetch();

            //RECUP NOM PRATICIENS
            $praID = $occurence[2];
            $reqSQLpraticien = "SELECT * FROM praticiens WHERE praID ='$praID'";
            $resBDpraticien = $connexion->query($reqSQLpraticien);
            $praticien = $resBDpraticien->fetch();

            //RECUP NOM MEDOC 1
            $nomMedoc1 = $occurence[7];
            $reqSQLmedoc1 = "SELECT * FROM medicaments WHERE medDepotlegal ='$nomMedoc1'";
            $resBDmedoc1 = $connexion->query($reqSQLmedoc1);
            $medoc1 = $resBDmedoc1->fetch();

            //RECUP NOM MEDOC 2
            $nomMedoc2 = $occurence[8];
            $reqSQLmedoc2 = "SELECT * FROM medicaments WHERE medDepotlegal ='$nomMedoc2'";
            $resBDmedoc2 = $connexion->query($reqSQLmedoc2);
            $medoc2 = $resBDmedoc2->fetch();

            //AFFICHAGE 
            echo "
                <tr>
                    <td>$visiteur[1] $visiteur[2]</td>
                    <td>$praticien[1] $praticien[2]</td>
                    <td>$dateRapport</td>
                    <td>$dateVisite</td>
                    <td>$occurence[5]</td>
                    <td>$occurence[6]</td>
                    <td>$medoc1[1]</td>
                    <td>$medoc2[1]</td>
                    <td>$occurence[9]/5</td>
                </tr>
            ";
        }
        ?>
    </table>
</body>

</html>