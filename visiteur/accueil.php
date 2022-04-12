<?php
session_start();

include("../includes/connexionbdd.inc.php");
include("../includes/historique.inc.php");
include("../includes/verifConnexVisit.inc.php");

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../assets/css/css.css">
    <script type="text/javascript" language="JavaScript" src="http://mlr-gsb.site/assets/js/js.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="http://mlr-gsb.site/assets/img/favicon.ico" />
    <title>Accueil visiteur - GSB</title>
</head>

<body>
    <div id="Accueil">
        <h1>ACCUEIL</h1>
    </div>
    <div class="Position">
        <div id="RapportdeVisite">
            <a href="rapportForm.php">
                <h4>Rapport de Visite</h4>
            </a>
        </div>
        <div id="Medicaments">
            <a href="consultMedoc.php">
                <h4>Médicaments</h4>
            </a>
        </div>
        <div id="Praticiens">
            <a href="consultPra.php">
                <h4>Praticiens</h4>
            </a>
        </div>
        <div id="ConsultationdesRapports">
            <a href="consultRapport.php">
                <h4>Consultation des Rapports</h4>
            </a>
        </div>
    </div>
</body>

</html>
