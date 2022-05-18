<?php
// D�finitions de constantes pour la connexion � MySQL
$hote = "95.179.217.85";
$login = "gsb";
$mdp = "mZe6GmN9pYGmcj";
$nombd = "mlr_gsb";

// Connection au serveur
try {
	$connexion = new PDO("mysql:host=$hote;dbname=$nombd", $login, $mdp);
} catch (Exception $e) {
	echo "failed";
}
