<?php
session_start();

include("includes/connexionbdd.inc.php");
include("includes/historique.inc.php");

?>



<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/css.css">
    <script type="text/javascript" language="JavaScript" src="assets/js/js.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/favicon.ico" />
    <title>Erreur 404</title>
</head>

<body>
    <header>
        <div class="center">
            <img id="image" src="assets/img/image404.png">
        </div>
    </header>

    <div id="Texte">
        <h3>Oops la page n'est pas trouvée</h3>
    </div>

    <a href="http://mlr-gsb.site/">
        <div id="Retour" class='center'>
            <input type="button" id='retour' class="link" value="RETOUR">
        </div>
    </a>


</body>



</html>