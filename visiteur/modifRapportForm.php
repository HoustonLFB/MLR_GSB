<?php
session_start();

include('../includes/connexionbdd.inc.php');

$_SESSION['supprChecked'] = $_POST['supprChecked'];
$cpt = 0;
foreach ($_POST['supprChecked'] as $occ) {
    $reqSQLsuppr = "SELECT * FROM `rapportVisite` WHERE rapID = '$occ' ";

    $resSQLrap = $connexion->query($reqSQLsuppr);
    $rapOccAll[$cpt] = $resSQLrap->fetch();
    $cpt = $cpt + 1;
}

$reqSQLpraticien = "SELECT praID, praNom, praPrenom FROM praticiens";
$resDBpraticien = $connexion->query($reqSQLpraticien);
$AllPra = $resDBpraticien->fetchAll();

$reqSQLmedoc = "SELECT * FROM medicaments";
$resDBmedoc = $connexion->query($reqSQLmedoc);
$AllMedoc = $resDBmedoc->fetchAll();

//MOTIF
// 1 Renouvellement
// 2 Nouveauté
// 3 Chute de prescriptions
// 4 Remplaçant
$motifAll = array(
    '1' => "Renouvellement",
    '2' => "Nouveauté",
    '3' => "Chute de prescriptions",
    '4' => "Remplaçant",
);

?>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../assets/css/css.css">
    <script type="text/javascript" language="JavaScript" src="../assets/js/js.js"></script>
    <script type="text/javascript" language="JavaScript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" language="JavaScript" src="../assets/js/ajax.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/favicon.ico" />

    <title>Modification rapport - GSB</title>

</head>

<body>
    <?php
    include("../includes/nav.inc.php");
    ?>

    <?php
    include("../includes/headerGSB.inc.php");
    ?>
    <form action="modifRapport.php" method="post">
        <table id="tableConsultRap">
            <thead>
                <tr>
                    <th colspan="1"><button type="button" onclick="window.location.href='consultRapport.php'">Retour</button></th>
                    <th colspan="9">Modification Rapports de Visite - GSB</th>
                </tr>
                <tr>
                    <th width="150px" class='BborderR'>Visiteur</th>
                    <th width="150px" class='BborderM'>Praticien</th>
                    <th width="150px" class='BborderM'>Remplaçant</th>
                    <th width="150px" class='BborderM'>Date Rapport</th>
                    <th width="150px" class='BborderM'>Date Visite</th>
                    <th width="150px" class='BborderM'>Bilan</th>
                    <th width="150px" class='BborderM'>Motif</th>
                    <th width="150px" class='BborderM'>Médicament 1</th>
                    <th width="150px" class='BborderM'>Médicament 2</th>
                    <th width="150px" class='BborderL'>Coefficient</th>
                </tr>
            </thead>
            <?php

            foreach ($rapOccAll as $rapOcc) {
                //MISE EN FORME DE LA DATE
                $dateRapport = date_format(new DateTime($rapOcc[4]), 'Y-m-d');
                $dateVisite = date_format(new DateTime($rapOcc[5]), 'Y-m-d');

                //RECUP NOM VISITEURS
                $visMatricule = $rapOcc[1];
                $reqSQLvisiteur = "SELECT * FROM visiteurs WHERE visMatricule ='$visMatricule'";
                $resBDvisiteur = $connexion->query($reqSQLvisiteur);
                $visiteur = $resBDvisiteur->fetch();

                //RECUP NOM PRATICIENS
                $praID = $rapOcc[2];
                $reqSQLpraticien = "SELECT * FROM praticiens WHERE praID ='$praID'";
                $resBDpraticien = $connexion->query($reqSQLpraticien);
                $praticien = $resBDpraticien->fetch();

                //RECUP NOM MEDOC 1
                $nomMedoc1 = $rapOcc[8];
                $reqSQLmedoc1 = "SELECT * FROM medicaments WHERE medDepotlegal ='$nomMedoc1'";
                $resBDmedoc1 = $connexion->query($reqSQLmedoc1);
                $medoc1 = $resBDmedoc1->fetch();

                //RECUP NOM MEDOC 2
                $nomMedoc2 = $rapOcc[9];
                $reqSQLmedoc2 = "SELECT * FROM medicaments WHERE medDepotlegal ='$nomMedoc2'";
                $resBDmedoc2 = $connexion->query($reqSQLmedoc2);
                $medoc2 = $resBDmedoc2->fetch();

                //MOTIF
                // 1 Renouvellement
                // 2 Nouveauté
                // 3 Chute de prescriptions
                // 4 Remplaçant
                switch ($rapOcc[7]) {
                    case "1":
                        $motif = "Renouvellement";
                        break;
                    case "2":
                        $motif = "Nouveauté";
                        break;
                    case "3":
                        $motif = "Chute de prescriptions";
                        break;
                    case "4":
                        $motif = "Remplaçant";
                        break;
                }

                //AFFICHAGE 
                echo "
                <tr>
                    <td class='borderR'>$visiteur[1] $visiteur[2]</td>
                    <td class='borderM'>
                        <select name='praticien[]'>";
                //affichage de tous les praticiens avec autoselect
                foreach ($AllPra as $occurencePra) {
                    if ($rapOcc[2] == $occurencePra['praID']) {
                        echo "<option value='" . $occurencePra['praID'] . "'' selected='selected'>" . $occurencePra['praNom'] . " " . $occurencePra['praPrenom'] . "</option>";
                    } else {
                        echo "<option value='" . $occurencePra['praID'] . "''>" . $occurencePra['praNom'] . " " . $occurencePra['praPrenom'] . "</option>";
                    }
                }
                echo "
                        </select>
                    </td>
                    <td class='borderM'><input type='text' value='$rapOcc[3]' name='rempla[]'></td>
                    <td class='borderM'><input type='date' value='$dateRapport' readonly></td>
                    <td class='borderM'><input type='date' value='$dateVisite' name='dateVis[]'></td>
                    <td class='borderM'><textarea name='bilan[]'>$rapOcc[6]</textarea></td>
                    <td class='borderM'>
                        <select name='motif[]' id='motif'>";
                // pour chaque motif
                foreach ($motifAll as $occMotif) {
                    //search du num du motif
                    $motifNow = array_search($occMotif, $motifAll);
                    //si motif du foreach est celui du rapport 
                    if ($occMotif == $motif) { //ajoute le selected 
                        echo "<option value='$motifNow' selected='selected'>$occMotif</option>";
                    } else {
                        echo "<option value='$motifNow'>$occMotif</option>";
                    }
                }
                echo "
                        </select> <br>
                    </td>
                    <td class='borderM'>
                        <select name='medoc1[]'>";
                foreach ($AllMedoc as $occMedoc) {
                    if ($medoc1[0] == $occMedoc[0]) {
                        echo "<option value='$occMedoc[0]' selected='selected'>$occMedoc[1]</option>";
                    } else {
                        echo "<option value='$occMedoc[0]'>$occMedoc[1]</option>";
                    }
                }
                echo "      </select>
                    </td>
                    <td class='borderM'>
                        <select name='medoc2[]'>";
                foreach ($AllMedoc as $occMedoc) {
                    if ($medoc2[0] == $occMedoc[0]) {
                        echo "<option value='$occMedoc[0]' selected='selected'>$occMedoc[1]</option>";
                    } else {
                        echo "<option value='$occMedoc[0]'>$occMedoc[1]</option>";
                    }
                }
                echo "
                        </select>
                    </td>
                    <td class='borderL'>$rapOcc[10]/5</td>
                </tr>
            ";
            }
            ?>

        </table>

        <input type='submit'>
    </form>
</body>

</html>