<?php
session_start();

$NIVuser = $_SESSION['NIVuser'];


// 1 = visiteurs
// 2 = délégué
// 3 = responsable
switch ($NIVuser) {
    case 1:
        header('Location : /visiteur/accueil.php');
        exit;
        break;
    case 2:
        header('Location : /delegue/accueil.php');
        break;
    case 3:
        header('Location : /responsable/accueil.php');
        break;
}
