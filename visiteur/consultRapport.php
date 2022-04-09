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

    <style>
        #tableConsult {
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

    <table id="tableConsult">
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
                <th>Médication 1</th>
                <th>Médicament 2</th>
                <th>Coefficient</th>
            </tr>
        </thead>
        <?php
        foreach ($rapportAll as $occurence) {
            $dateRapport = date_format(new DateTime($occurence[3]), 'Y/m/d');
            $dateVisite = date_format(new DateTime($occurence[4]), 'Y/m/d');
            echo "
                <tr>
                    <td>$occurence[1]</td>
                    <td>$occurence[2]</td>
                    <td>$dateRapport</td>
                    <td>$dateVisite</td>
                    <td>$occurence[5]</td>
                    <td>$occurence[6]</td>
                    <td>$occurence[7]</td>
                    <td>$occurence[8]</td>
                    <td>$occurence[9]</td>
                </tr>
            ";
        }
        ?>
    </table>
</body>

</html>