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
    <script type="text/javascript" language="JavaScript" src="../assets/js/js.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/favicon.ico" />
    <title>Accueil visiteur - GSB</title>
</head>

<body>
    <div id="Accueil">
        <h1>ACCUEIL</h1>
    </div>
    <div class="Position">
        <a href="rapportForm.php">
            <div id="RapportdeVisite">
                <h4>Rapport de Visite</h4>
            </div>
        </a>
        <a href="consultMedoc.php">
            <div id="Medicaments">
                <h4>Médicaments</h4>
            </div>
        </a>
        <a href="consultPra.php">
            <div id="Praticiens">
                <h4>Praticiens</h4>
            </div>
        </a>
        <a href="consultRapport.php">
            <div id="ConsultationdesRapports">
                <h4>Consultation des Rapports</h4>
            </div>
        </a>
    </div>
</body>

</html>
