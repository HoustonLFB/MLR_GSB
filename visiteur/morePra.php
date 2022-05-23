<?php
session_start();

include("../includes/connexionbdd.inc.php");

$nomPra = $_POST['nomPra'];

$reqSQL = "SELECT * FROM praticiens WHERE praID ='$nomPra'";
$praAffichage = $connexion->query($reqSQL);
$pra = $praAffichage->fetch();

?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../assets/css/css.css">
    <script type="text/javascript" language="JavaScript" src="../assets/js/js.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/favicon.ico" />
    <title>Description Praticien - GSB</title>
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
                <th colspan="5">
                    <div id="titreMedoc">
                        Description du Praticien
                    </div>

                </th>
            </tr>
            <tr>
                <th width="200px" class='BborderR'>Nom</th>
                <th width="200px" class='BborderR'>Prenom</th>
                <th width="200px" class='BborderL'>Adresse</th>
                <th width="200px" class='BborderL'>Code Postal</th>
                <th width="200px" class='BborderL'>Ville</th>
            </tr>
        </thead>

        <?php
        echo "
                <tr>
                    <td class='borderR'>$pra[1]</td>
                    <td class='borderR'>$pra[2]</td>
                    <td class='borderR'>$pra[3]</td>
                    <td class='borderR'>$pra[4]</td>
                    <td class='borderR'>$pra[5]</td>
                </tr>
            ";

        ?>
    </table>
    <div id="boutonPra" class="aligncenter">
        <a href='consultPra.php'><button type="button"> Retour</button></a>
    </div>