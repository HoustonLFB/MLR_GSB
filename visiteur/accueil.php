
<?php
session_start();




//ECRIRE LE SITE ICI
if ($_SESSION['logged'] && $_SESSION['NIVuser'] == 1 || 1 == 1) {
    echo <<<HTML

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="http://mlr-gsb.site/assets/css/css.css">
        <script type="text/javascript" language="JavaScript" src="http://mlr-gsb.site/assets/js/js.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="http://mlr-gsb.site/assets/img/favicon.ico"/>
        <title>Accueil visiteur - GSB</title>
    </head>
    <body>
        <div id="Accueil">
            <h1>ACCUEIL</h1>
        </div>
        <div class="Position">
            <div id="RapportdeVisite">
                <a href="rapportForm.php"><h4>Rapport de Visite</h4></a>
            </div>
            <div id="Medicament">
                <h4>Médicament</h4>
            </div>
            <div id="Praticien">
                <h4>Praticien</h4>
            </div>
            <div id="ConsultationdesRapports">
                <a href="consultRapport.php"><h4>Consultation des Rapports</h4></a>
            </div>
        </div>
    </body>

</html>

HTML;
} else {
    echo <<<HTML

Vous n'avez pas accès à cette ressource. <br>

<a href='../'>Cliquez ici pour vous connecter</a>

HTML;
}



?>