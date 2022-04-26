<?php
session_start();

include('../includes/connexionbdd.inc.php');

foreach ($_POST['supprChecked'] as $occ) {
    $reqSQLsuppr = "SELECT * FROM `rapportVisite` WHERE rapID = '$occ' ";

    $resSQLrap = $connexion->query($reqSQLsuppr);
    $rapOcc = $resSQLrap->fetch();
}
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

    <title>Formulaire rapport - GSB</title>

</head>

<body>
    <header>
        <div class="center">
            <img id="logo" src="../assets/img/logo-gsb.png">
        </div>
    </header>
    <table id="tableConsultRap">
        <thead>
            <tr>
                <th colspan="10">Modification d'un Rapport de Visite</th>
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

        //AFFICHAGE 
        echo "
                <tr>
                    <td class='borderR'>$visiteur[1] $visiteur[2]</td>
                    <td class='borderM'>$praticien[1] $praticien[2]</td>
                    <td class='borderM'><input type='text' value='$rapOcc[3]'></td>
                    <td class='borderM'><input type='date' value='$dateRapport'</td>
                    <td class='borderM'><input type='date' value='$dateVisite'</td>
                    <td class='borderM'><textarea>$rapOcc[6]</textarea></td>
                    <td class='borderM'>
                        <select name='motif' id='motif' required>
                        <option value='$rapOcc[7]' checked>$rapOcc[7]</option>'
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        </select> <br>
                    </td>
                    <td class='borderM'>$medoc1[1]</td>
                    <td class='borderM'>$medoc2[1]</td>
                    <td class='borderL'>$rapOcc[10]/5</td>
                </tr>
            ";
        ?>

    </table>
    <input type='submit'>
</body>

</html>