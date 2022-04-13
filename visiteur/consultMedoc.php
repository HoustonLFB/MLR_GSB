<?php
session_start();

include("../includes/connexionbdd.inc.php");
include("../includes/historique.inc.php");
include("../includes/verifConnexVisit.inc.php");

$reqSQLconsultMedoc = "SELECT * FROM medicaments";
$resBDmedoc = $connexion->query($reqSQLconsultMedoc);
$medocAll = $resBDmedoc->fetchAll();

?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="http://mlr-gsb.site/assets/css/css.css">
    <script type="text/javascript" language="JavaScript" src="http://mlr-gsb.site/assets/js/js.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="http://mlr-gsb.site/assets/img/favicon.ico" />
    <title>Consultation Médicaments - GSB</title>

    <style>
        #tableConsultMedoc {
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

    <table id="tableConsultMedoc">
        <thead>
            <tr>
                <th colspan="2">Consultation des Médicaments</th>
            </tr>
            <tr>
                <th>Deport Légal</th>
                <th>Nom</th>
            </tr>
        </thead>

        <?php
        foreach ($medocAll as $occurence) {
            $codeMed = $occurence[0];
            $nomMed = $occurence[1];

            echo "
                <tr>
                    <td>$codeMed</td>
                    <td>$nomMed</td>
                </tr>
            ";
        }
        ?>
    </table>




</body>

</html>