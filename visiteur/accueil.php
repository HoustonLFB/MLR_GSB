
<?php
session_start();




//ECRIRE LE SITE ICI
if ($_SESSION['logged'] && $_SESSION['NIVuser'] == 1) {
    echo <<<HTML

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="http://gsb.wilfriedlefebvre.fr/assets/css/css.css">
        <script type="text/javascript" language="JavaScript" src="http://gsb.wilfriedlefebvre.fr/assets/js/js.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil visiteur - GSB</title>
    </head>
    <body>
        <div id="Accueil">
            <h1>ACCUEIL</h1>
        </div>
        <div class="Position">
            <div id="RapportdeVisite">
                <h4>Rapport de Visite</h4>
            </div>
            <div id="Medicament">
                <h4>Médicament</h4>
            </div>
            <div id="Praticien">
                <h4>Praticien</h4>
            </div>
            <div id="ConsultationdesRapports">
                <h4>Consultation des Rapports</h4>
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