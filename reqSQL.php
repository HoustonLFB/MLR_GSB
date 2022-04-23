<?php

include("includes/connexionbdd.inc.php");

$reqVIS = "SELECT visMatricule, visDateEmbauche FROM visiteurs WHERE visMatricule != 'MATtest' ";

$resVIS = $connexion->query($reqVIS);

$VISfetched = $resVIS->fetchAll();

foreach ($VISfetched as $occ) {
    $mdp = $occ[1];
    $mdp = substr_replace($mdp, "", -1);
    $mdp = substr_replace($mdp, "", -1);
    $mdp = substr_replace($mdp, "", -1);
    $mdp = substr_replace($mdp, "/", 4, 1);
    echo $mdp;
    $hash = password_hash($mdp, PASSWORD_BCRYPT);
    $reqCOM = "INSERT INTO compte VALUES ('$occ[0]', '$hash', '$occ[0]', 1);";
    //$connexion->exec($reqCOM);
    echo $reqCOM . "<br>";
}
