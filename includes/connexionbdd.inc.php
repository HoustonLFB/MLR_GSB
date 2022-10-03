<?php
// D�finitions de constantes pour la connexion � MySQL
$hote = "************";
$login = "************";
$mdp = "************";
$nombd = "mlr_gsb";

// Connection au serveur
try {
	$connexion = new PDO("mysql:host=$hote;dbname=$nombd", $login, $mdp);
} catch (Exception $e) {
	echo "failed";
}
