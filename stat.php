<?php
session_start();


include("includes/connexionbdd.inc.php");

$NBmotif1 = $connexion->query("SELECT count(rapMotif) FROM rapportVisite WHERE rapMotif=1")->fetchAll();
$NBmotif2 = $connexion->query("SELECT count(rapMotif) FROM rapportVisite WHERE rapMotif=2")->fetchAll();
$NBmotif3 = $connexion->query("SELECT count(rapMotif) FROM rapportVisite WHERE rapMotif=3")->fetchAll();
$NBmotif4 = $connexion->query("SELECT count(rapMotif) FROM rapportVisite WHERE rapMotif=4")->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/css.css">
    <script type="text/javascript" language="JavaScript" src="assets/js/js.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/favicon.ico" />
    <title>Se connecter - GSB</title>

    <style type="text/css">
        .graph {
            width: 20%;
        }
    </style>
</head>

<?php
//include("includes/nav.inc.php");

//include("includes/headerGSB.inc.php");
?>

<div class="graph">
    <canvas id="myChart"></canvas>
</div>

<script>
    //LABELS
    const labels = [
        'Renouvellement',
        'Nouveauté',
        'Baisse de prescriptions',
        'Remplaçant',
    ];

    //DONNEES
    const data = {
        labels: labels,
        datasets: [{
            label: 'Visiteur Rapports',
            backgroundColor: ["red",
                "cyan",
                "orange",
                "green"
            ],
            //borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $NBmotif1[0][0] ?>, <?php echo $NBmotif2[0][0] ?>, <?php echo $NBmotif3[0][0] ?>, <?php echo $NBmotif4[0][0] ?>],

        }]
    };

    //CONFIG
    const config = {
        type: 'pie',
        data: data,
        options: {}
    };
</script>

<script>
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>


<?php
echo $_SESSION['test'];
?>