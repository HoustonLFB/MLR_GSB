<?php
// D�finitions de constantes pour la connexion � MySQL
$hote = "localhost";
$login = "pma";
$mdp = "&#Q2uwMCeGy9";
$nombd = "mlr_gsb";

// Connection au serveur
try {
	$connexion = new PDO("mysql:host=$hote;dbname=$nombd", $login, $mdp);
} catch (Exception $e) {
	echo "failed";
}
