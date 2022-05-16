<?php
session_start();

include("../includes/connexionbdd.inc.php");
include("../includes/historique.inc.php");
include("../includes/verifConnexVisit.inc.php");

$reqSQLconsultRap = "SELECT * FROM rapportVisite";
$resBDrapport = $connexion->query($reqSQLconsultRap);
$rapportAll = $resBDrapport->fetchAll();

?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../assets/css/css.css">
    <script type="text/javascript" language="JavaScript" src="../assets/js/js.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/favicon.ico" />
    <title>Consultation Rapports - GSB</title>

</head>

<body>
    <?php
    include("../includes/nav.inc.php");
    ?>
    <?php
    include("../includes/headerGSB.inc.php");
    ?>

    <?php
    if (isset($_SESSION['supprMultiDone'])) {
        echo '<script type="text/javascript">supprMultiDone();</script>';
        echo "
                <div style='color: black;' class='aligncenter'>
                Le rapport ont bien été supprimés.
                </div>
            ";
        unset($_SESSION['supprMultiDone']);
    }
    if (isset($_SESSION['supprDone'])) {
        echo '<script type="text/javascript">supprDone();</script>';
        echo "
                <div style='color: black;' class='aligncenter'>
                Le rapport a bien été supprimé.
                </div>
            ";
        unset($_SESSION['supprDone']);
    }
    ?>
    <form method='POST' name='supprRapport'>
        <table id="tableConsultRap">
            <thead>
                <tr>
                    <th colspan="1"><button formaction='supprRapport.php' onclick="return verifSuppression(this)">Supprimer</button><br><button formaction='modifRapportForm.php' style=" padding: 1px 12px;">Modifier</button></th>
                    <th colspan="10">Consultation des Rapports de Visites</th>
                </tr>
                <tr>
                    <th class='BborderR'>Sélection</th>
                    <th width="150px" class='BborderM'>Visiteur</th>
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
            foreach ($rapportAll as $occurence) {
                //MISE EN FORME DE LA DATE
                $dateRapport = date_format(new DateTime($occurence[4]), 'd/m/Y');
                $dateVisite = date_format(new DateTime($occurence[5]), 'd/m/Y');

                //RECUP NOM VISITEURS
                $visMatricule = $occurence[1];
                $reqSQLvisiteur = "SELECT * FROM visiteurs WHERE visMatricule ='$visMatricule'";
                $resBDvisiteur = $connexion->query($reqSQLvisiteur);
                $visiteur = $resBDvisiteur->fetch();

                //RECUP NOM PRATICIENS
                $praID = $occurence[2];
                $reqSQLpraticien = "SELECT * FROM praticiens WHERE praID ='$praID'";
                $resBDpraticien = $connexion->query($reqSQLpraticien);
                $praticien = $resBDpraticien->fetch();

                //RECUP NOM MEDOC 1
                $nomMedoc1 = $occurence[8];
                $reqSQLmedoc1 = "SELECT * FROM medicaments WHERE medDepotlegal ='$nomMedoc1'";
                $resBDmedoc1 = $connexion->query($reqSQLmedoc1);
                $medoc1 = $resBDmedoc1->fetch();

                //RECUP NOM MEDOC 2
                $nomMedoc2 = $occurence[9];
                $reqSQLmedoc2 = "SELECT * FROM medicaments WHERE medDepotlegal ='$nomMedoc2'";
                $resBDmedoc2 = $connexion->query($reqSQLmedoc2);
                $medoc2 = $resBDmedoc2->fetch();

                //MOTIF
                // 1 Renouvellement
                // 2 Nouveauté
                // 3 Chute de prescriptions
                // 4 Remplaçant
                switch ($occurence[7]) {
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
                <tr>";
                if ($_SESSION['IDuser'] == $occurence[1]) {
                    echo "<td class='borderR'><input type='checkbox' name='supprChecked[]' id='supprChecked' value='$occurence[0]'></td>";
                } else {
                    echo "<td class='borderR'></td>";
                }

                echo "
                    <td class='borderM'>$visiteur[1] $visiteur[2]</td>
                    <td class='borderM'>$praticien[1] $praticien[2]</td>
                    <td class='borderM'>$occurence[3]</td>
                    <td class='borderM'>$dateRapport</td>
                    <td class='borderM'>$dateVisite</td>
                    <td class='borderM'>$occurence[6]</td>
                    <td class='borderM'>$motif</td>
                    <td class='borderM'>$medoc1[1]</td>
                    <td class='borderM'>$medoc2[1]</td>
                    <td class='borderL'>$occurence[10]/5</td>
                </tr>
            ";
            }
            ?>
        </table>
    </form>
</body>

</html>