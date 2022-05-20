<?php

$reqSQLconsultPra = "SELECT * FROM praticiens";
$resBDpra = $connexion->query($reqSQLconsultPra);
$praAll = $resBDpra->fetchAll();
?>

<form action='filtrageRapport.php' method="POST" id="filtrage">
    <b>Affichage rapports : </b>
    <input type="radio" value="1" name="affRap" checked> Les vôtres &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" value="2" name="affRap"> Tout le monde<br>
    <b>Par praticiens : </b>
    <?php
    echo "<select name='choixPra' style='width: 150px'>";
    echo "<option value=''>Tous</option>";
    foreach ($praAll as $occurencePra) {
        $praID = $occurencePra['praID'];
        $praNom = $occurencePra['praNom'];
        $praPrenom = $occurencePra['praPrenom'];
        echo "<option value='$praID'>$praNom $praPrenom</option>";
    }
    echo "</select>";
    ?>
    <br>
    <input type="submit">
</form>