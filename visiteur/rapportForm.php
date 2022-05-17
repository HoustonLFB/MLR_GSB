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
    <?php
    include("../includes/nav.inc.php");
    ?>
    <div class="main">
        <?php
        include("../includes/headerGSB.inc.php");
        ?>
        <div class="aligncenter">
            <?php
            // AFFICHAGE DES ERREURS
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
            if (isset($_SESSION['rapAdded'])) {
                echo '<script type="text/javascript">rapAdded();</script>';
                echo "
                <div style='color: black;'>
                Le rapport a bien été ajouté.
                </div>
            ";
                unset($_SESSION['rapAdded']);
            }
            ?>
        </div>
        <div name="formRapport" class="aligncenter">
            <form action="ajoutRapport.php" method="POST">
                <div id="FormGr1">
                    <div id='Form1' class="aligncenter">
                        Quel Praticien : <select name="praticienChoix" class="scrollbarthin">
                            <?php
                            foreach ($resDBpraticien as $occurencePra) {
                                echo "<option value='" . $occurencePra['praID'] . "''>" . $occurencePra['praNom'] . " " . $occurencePra['praPrenom'] . "</option>";
                            }
                            ?>
                        </select><br>
                    </div>

                    <div id='Form2' class="aligncenter">
                        Remplaçant <input type="checkbox" name="remplaDemande" id="remplaDemande" class="remplaON"><br>
                    </div>

                    <div id="tittle1">
                        <p>  Informations Praticien  </p>
                    </div>
                </div>

                <div id="FormGr2">
                    <div id='Form3' class="aligncenter">
                        Quand visite ? <input type="date" name="dateVisite" id="dateVisite" required><br>
                    </div>

                    <div id='Form4' class="aligncenter">
                        Motif de visite : 
                        <select name="motif" id="motif" required>
                            <option value="1">Renouvellement</option>
                            <option value="2">Nouveauté</option>
                            <option value="3">Chute de prescriptions</option>
                            <option value="4">Remplaçant</option>
                        </select> <br>
                    </div>

                    <div id="tittle2">
                        <p>  Informations Visite  </p>
                    </div>
                </div>

                <div id="FormGr3">
                    <div id='Form5' class="aligncenter">
                        Medicament 1 : <select name="medoc1" id="medoc1" class="scrollbarthin" required>
                            <?php
                            foreach ($medicamentsAll as $occurenceMedoc) {
                                $IDmedoc = $occurenceMedoc[0];
                                $libMedoc = $occurenceMedoc[1];
                                echo "<option value='$IDmedoc'>$libMedoc</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div id='Form6' class="aligncenter">
                        Medicament 2 : <select name="medoc2" id="medoc2" class="scrollbarthin" required>
                            <?php
                            foreach ($medicamentsAll as $occurenceMedoc) {
                                $IDmedoc = $occurenceMedoc[0];
                                $libMedoc = $occurenceMedoc[1];
                                echo "<option value='$IDmedoc'>$libMedoc</option>";
                            }
                            ?>
                        </select><br>
                    </div>

                    <div id="tittle3">
                        <p>  Informations Médicaments  </p>
                    </div>
                </div>
                <div id="FormGr4">
                    <div id='Form7'>
                        <p>Coefficient de confiance :</p>
                        <input name="rangeCoef" type="range" style="width: 245px; height: 40px" min="1" max="5" step="1">
                        <div id="smiles_line" class="aligncenter">
                            <div><img src="..\assets\img\smile\Smile1.png" class="smiles"></img></div>
                            <div><img src="..\assets\img\smile\Smile2.png" class="smiles"></img></div>
                            <div><img src="..\assets\img\smile\Smile3.png" class="smiles"></img></div>
                            <div><img src="..\assets\img\smile\Smile4.png" class="smiles"></img></div>
                            <div><img src="..\assets\img\smile\Smile5.png" class="smiles"></img></div>
                        </div>
                    </div>

                    <div id='Form8'>
                        <p class="aligncenter">Bilan du rapport : </p>
                        <textarea name="rapBilan" id="rapBilan"></textarea><br>
                    </div>

                    <div id="tittle4">
                        <p>  Informations Supplémentaires  </p>
                    </div>
                </div>
                <div class="center">
                    <input type="submit" id="submitRapport">
                </div>
            </form>

        </div>
    </div>
</body>

</html>