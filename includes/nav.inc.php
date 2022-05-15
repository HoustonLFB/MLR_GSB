<nav>
    <?php
    //RECUPERATION DES INFOS ET MISE DANS VARIABLES LOCALES

    //des variables sessions 
    $IDuser = $_SESSION['IDuser'];
    $NIVuser = $_SESSION['NIVuser'];

    //formatage du nom NIV
    switch ($NIVuser) {
        case 1:
            $NIVnom = "visiteur";
            break;
        case 2:
            $NIVnom = "délégué";
            break;
        case 3:
            $NIVnom = "responsable";
            break;
    }

    //du nom et prenom de l'employé  
    $reqSQLvisiteur = "SELECT * FROM visiteurs WHERE visMatricule ='$IDuser'";
    $resBDvisiteur = $connexion->query($reqSQLvisiteur);
    $visiteur = $resBDvisiteur->fetch();
    $visNom = $visiteur[1];
    $visPrenom = $visiteur[2];

    //AFFICHAGE DU NOM
    echo "Vous êtes connecté en tant que $NIVnom: $visNom $visPrenom, $IDuser";
    ?>

    <div id="links">
        <a href="rapportForm.php">Formulaire rapport</a> &nbsp;
        - &nbsp;
        <a href="consultRapport.php">Consultation rapports</a> &nbsp;
        - &nbsp;
        <a href="consultPra.php">Consultation praticiens</a> &nbsp;
        - &nbsp;
        <a href="consultMedoc.php">Consultation médicaments</a> &nbsp;
        - &nbsp;
        <a href="../logout.php">Se déconnecter</a>
    </div>
</nav>