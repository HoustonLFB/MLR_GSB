
<?php
session_start();




//ECRIRE LE SITE ICI
if ($_SESSION['logged'] && $_SESSION['NIVuser'] == 1) {
    echo <<<HTML

<!DOCTYPE html>
<html>
    <head>
        <title>Accueil visiteur - GSB</title>
        <link rel="stylesheet" href="../assets/css/css.css">
		<meta charset=utf-8>

    </head>
    <body>
        <div class="Position">
            <div id="Accueil">
                <h1>ACCUEIL</h1>
            </div>
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