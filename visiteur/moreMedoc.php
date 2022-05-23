<?php
session_start();

include("../includes/connexionbdd.inc.php");

$nomMedoc = $_POST['nomMedoc'];

$reqSQL = "SELECT * FROM medicaments WHERE medDepotLegal ='$nomMedoc'";
$medocAffichage = $connexion->query($reqSQL);
$medoc = $medocAffichage->fetch();

?>
<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../assets/css/css.css">
    <script type="text/javascript" language="JavaScript" src="../assets/js/js.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/favicon.ico" />
    <title>Description Médicaments - GSB</title>
</head>

<body>
    <?php
    include("../includes/nav.inc.php");
    ?>
    <?php
    include("../includes/headerGSB.inc.php");
    ?>


    <table id="tableConsultMedoc">
        <thead>
            <tr>
                <th colspan="4">
                    <div id="titreMedoc">
                        Description du Médicament
                    </div>

                </th>
                <th>
                    <div>
                        <a href='consultMedoc.php'><button type="button"> Retour</button></a>
                    </div>
            </tr>
            <tr>
                <th width="200px" class='BborderR'>Deport Légal</th>
                <th width="200px" class='BborderR'>Nom</th>
                <th width="200px" class='BborderL'>Composition</th>
                <th width="200px" class='BborderL'>Effets</th>
                <th width="200px" class='BborderL'>Contre Indication</th>
            </tr>
        </thead>

        <?php
        echo "
                <tr>
                    <td class='borderR'>$medoc[0]</td>
                    <td class='borderR'>$medoc[1]</td>
                    <td class='borderR'>$medoc[2]</td>
                    <td class='borderR'>$medoc[3]</td>
                    <td class='borderR'>$medoc[4]</td>
                </tr>
            ";

        ?>