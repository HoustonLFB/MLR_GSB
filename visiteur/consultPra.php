<?php
session_start();

include("../includes/connexionbdd.inc.php");
include("../includes/historique.inc.php");
include("../includes/verifConnexVisit.inc.php");

$reqSQLconsultPra = "SELECT * FROM praticiens";
$resBDpra = $connexion->query($reqSQLconsultPra);
$praAll = $resBDpra->fetchAll();

?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../assets/css/css.css">
    <script type="text/javascript" language="JavaScript" src="../assets/js/js.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/favicon.ico" />
    <title>Consultation Praticiens - GSB</title>
</head>

<body>
    <?php
    include("../includes/nav.inc.php");
    ?>
    <?php
    include("../includes/headerGSB.inc.php");
    ?>

    <table id="tableConsultPra">
        <thead>
            <tr>
                <th colspan="2"><div id="titrePra">Consultation des Praticiens</div></th>
            </tr>
            <tr>
                <th width="100px" class='BborderR'>ID</th>
                <th width="400px" class='BborderL'>Nom</th>
            </tr>
        </thead>

        <?php
        foreach ($praAll as $occurence) {
            $praID = $occurence[0];
            $praNom = $occurence[1];
            $praPrenom = $occurence[2];



            echo "
                <tr>
                    <td class='borderR'>$praID</td>
                    <td class='borderL'>$praNom $praPrenom</td>
                </tr>
            ";
        }
        ?>
    </table>

</body>

</html>