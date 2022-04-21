<?php
session_start();

include("../includes/connexionbdd.inc.php");
include("../includes/historique.inc.php");
include("../includes/verifConnexVisit.inc.php");

//REQUETE ET EXECUTION
$reqSQLpraticien = "SELECT praID, praNom, praPrenom FROM praticiens";
$resDBpraticien = $connexion->query($reqSQLpraticien);

$reqSQLmedicament = "SELECT medDepotLegal, medNomcommercial FROM medicaments";
$resDBmedicament = $connexion->query($reqSQLmedicament);

//RECUP ALL MEDOCS
$medicamentsAll = $resDBmedicament->fetchAll();
?>

<!DOCTYPE HTML>

<html lang="fr">

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

    <div name="formRapport" id="formRapport">
        <form action="ajoutRapport.php" method="POST">
            <div class='bouducon'>
                Quel Praticien : <select name="praticienChoix" id="scrollbarPra">
                    <?php
                    foreach ($resDBpraticien as $occurencePra) {
                        echo "<option value='" . $occurencePra['praID'] . "''>" . $occurencePra['praNom'] . " " . $occurencePra['praPrenom'] . "</option>";
                    }
                    ?>
                </select><br>
            </div>

            <div class='bouducon'>
                Remplaçant <input type="checkbox" name="remplaDemande" id="remplaDemande" class="remplaON"><br>
            </div>

            <div class='bouducon'>
                Quand visite ? <input type="date" name="dateVisite" id="dateVisite" required><br>
            </div>

            <div class='bouducon'>
                Motif de visite :
                <select name="motif" id="motif" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select> <br>
            </div>

            <div class='bouducon'>
                Medicament 1 : <select name="medoc1" id="medoc1" required>
                    <?php
                    foreach ($medicamentsAll as $occurenceMedoc) {
                        $IDmedoc = $occurenceMedoc[0];
                        $libMedoc = $occurenceMedoc[1];
                        echo "<option value='$IDmedoc'>$libMedoc</option>";
                    }
                    ?>
                </select>
            </div>

            <div class='bouducon'>
                Medicament 2 : <select name="medoc2" id="medoc2">
                    <?php
                    foreach ($medicamentsAll as $occurenceMedoc) {
                        $IDmedoc = $occurenceMedoc[0];
                        $libMedoc = $occurenceMedoc[1];
                        echo "<option value='$IDmedoc'>$libMedoc</option>";
                    }
                    ?>
                </select><br>
            </div>

            <div class='bouducon'>
                Coefficient de confiance : <br>
                <input name="rangeCoef" id="rangeCoef" type="range" style="width: 200px; height: 40px" min="1" max="5" value="1" step="1" list="increments" oninput="showMainTstatValue(this.value)" onchange="showMainTstatValue(this.value)">
                <span id="rangeShow">1</span> <br>
            </div>


            <div class='bouducon'>
                Bilan du rapport : <br>
                <textarea name="rapBilan" id="rapBilan"></textarea><br>
            </div>

            <input type="submit" />
        </form>
        <?php
        if (isset($_SESSION['erreurDateMsg'])) {
            echo '<script type="text/javascript">alertMauvaiseDate();</script>';
            echo "
                <div style='color: red;'>
                La date de visite ne peut pas être ultérieur à la date de saisie.
                </div>
            ";
            unset($_SESSION['erreurDateMsg']);
        }
        if (isset($_SESSION['erreurDoubleProd'])) {
            echo '<script type="text/javascript">alertDoubleProd();</script>';
            echo "
                <div style='color: red;'>
                Les deux médicaments ne peuvent pas être les mêmes.
                </div>
            ";
            unset($_SESSION['erreurDoubleProd']);
        }
        ?>
    </div>
</body>

</html>