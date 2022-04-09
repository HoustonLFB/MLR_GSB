<?php
if (isset($_SESSION['logged']) || isset($_SESSION['NIVuser'])) {
    if ($_SESSION['logged'] != True || $_SESSION['NIVuser'] != 3) {
        die("Vous n'avez pas accès à cette ressource. <br> <a href='../'>Cliquez ici pour vous connecter</a>");
    }
} else {
    die("Vous n'avez pas accès à cette ressource. <br> <a href='../'>Cliquez ici pour vous connecter</a>");
}
