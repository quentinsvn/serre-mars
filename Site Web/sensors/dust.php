<?php
    include('../scripts/config.php');
    include('../scripts/stats_dust.php');
    // Capteur d'humidité & température
    $reqdust = $bdd->query("SELECT * FROM dust ORDER BY id DESC");
    $dust = $reqdust->fetch();
    if(isset($dust['pcs'])) {
        $pcs = $dust['pcs'];
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../assets/img/icon.ico" />
    
    <title>Projet Terminale STI2D - Serre sur Mars</title>
    <meta name="description" content="Projet Terminale STI2D - Serre sur Mars" />
    <meta name="keywords" content="serre, mars, projet, sti2d, raspberry, sensors" />
    <meta name="author" content="Quentin S." />
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/7a293f3dad.js" crossorigin="anonymous"></script>


</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="../index.php">
                    <h3 class="serre">Serre</h3> sur <span class="mars">Mars</span>
                </a>
            </div>

            <ul class="list-unstyled components">
                <small class="pl-2 category">MENU</small>
                <li>
                    <a href="../index.php"><i class="fas fa-home"></i> Vue d'ensemble</a>
                </li>
                <li>
                    <a href="#sensors" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"><i
                            class="fas fa-microchip"></i> Capteurs</a>
                    <ul class="collapse list-unstyled collapse show" id="sensors">
                        <li>
                            <a href="index.php">Humidité</a>
                        </li>
                        <li class="active">
                            <a href="dust.php">Poussières</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../reports/index.php"><i class="fas fa-chart-area"></i> Relevés</a>
                </li>
                <li>
                    <a href="#resources" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                            class="fas fa-book"></i> Ressources</a>
                    <ul class="collapse list-unstyled" id="resources">
                        <li>
                            <a href="../resources/index.php">Cahier des charges</a>
                        </li>
                        <li>
                            <a href="../resources/diagrams.php">Diagrammes</a>
                        </li>
                        <li>
                            <a href="../resources/sketch.php">Croquis</a>
                        </li>
                        <li>
                            <a href="../resources/programs.php">Programmes</a>
                        </li>
                        <li>
                            <a href="../resources/mentions.php">Mentions</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../api/"><i class="fas fa-wrench"></i> API</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Application
                        mobile</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Consulter sur GitHub</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-collapse">
                        <i class="fas fa-align-left"></i>
                    </button>

                    <a href="../videos" type="button" class="btn btn-collapse btn-play">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </nav>

            <div class="modules_content">
                <div class="title_section mb-3">
                    <h2 class="page-header">Capteur de poussières<small></small></h2>
                </div>

                <div class="row">
                    <div class="col-sm mb-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Indications</h5>
                                <p>
                                    Ce capteur donne une bonne indication de la qualité de l'air dans un environnement en mesurant la concentration de poussière.
                                    Le niveau de matière particulaire (PM en anglais) dans l'air est mesuré en comptant le temps d'occupation à faible impulsion (temps LPO en anglais) dans l'unité de temps donnée. 
                                    Le temps LPO est proportionnel à la concentration de matières particulaires. 
                                    Le capteur répond aux matières particulaires de diamètre 1 um ou plus. 
                                    Ce capteur utilise une méthode de comptage pour tester la concentration de poussière mais pas
                                    de méthode de poids, et l'unité est le pcs/L ou bien le pcs/0.01cf.
                                    Ce capteur peut fournir des données fiables pour les systèmes de purification d'air.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cartes stats poussières -->
                <div class="row">                    
                    <div class="col-sm mb-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="nbr_capteurs">
                                    <img width="55" src="../assets/img/dust3.png" alt="">
                                    <ul class="stats_card">
                                        <li>
                                            <h2 class="resultat_pcs"><?php if(isset($pcs)) { echo $pcs; } else { echo 0; } ?> PCS</h2>
                                        </li>
                                        <li class="label">Concentration de poussières</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                <div class="nbr_capteurs">
                                <i class="fas fa-percent fa-3x"></i>
                                    <ul class="stats_card">
                                        <li>
                                            <h2 class="resultat_lpop"><?php if(isset($lpop)) { echo $lpop; } else { echo 0; }?>%</h2>
                                        </li>
                                        <li class="label">Faible taux d'impulsion</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->

                <!-- Graphiques -->

                <div class="row mb-4">
                    <!-- Graphique Humidité -->
                    <div class="col-sm col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Graphique</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Mesures de la concentration de poussières</h6>
                                <canvas id="pcschart"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Graphique Température -->  
                    <div class="col-sm col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Graphique</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Mesures du faible taux d'impulsion</h6>
                                <canvas id="lpopchart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Graphique des moyennes --> 
                <div class="row mb-4">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Graphique</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Moyennes des mesures</h6>
                                <canvas id="moyenne"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>
    <!-- ChartJS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!-- Script JS -->
    <script src="../assets/js/script.js"></script>
    <script>
         function refresh_pcs() {
            jQuery.ajax({
                url:'../scripts/dust.php',
                type:'POST',
                success:function(results) {
                    jQuery(".resultat_pcs").html(results).append(' PCS');
                }
            });
        }

        t = setInterval(refresh_pcs,1000);

        function refresh_lpop() {
            jQuery.ajax({
                url:'../scripts/lpop.php',
                type:'POST',
                success:function(results) {
                    jQuery(".resultat_lpop").html(results).append('%');
                }
            });
        }

        t = setInterval(refresh_lpop,1000);
    </script>
    <!-- Graphique -->
    <script>
        $(document).ready(function () {
            pcsChart();
            lpopChart();
            t = setInterval(pcsChart,1000);
            t = setInterval(lpopChart,1000);
        });

        // Cencentration
        function pcsChart()
        {
            {
                $.post("../scripts/realtime_dust.php",
                function (data)
                {
                    console.log(data);
                     var pcs = [];
                     var date = [];

                    for (var i in data) {
                        pcs.push(data[i].pcs);
                        date.push(data[i].date);
                    }

                    var chartdata = {
                        labels: date,
                        datasets: [
                            {
                                label: 'Concentration (PCS)',
                                backgroundColor: 'rgba(230, 126, 34,0.5)',
                                borderColor: 'rgba(230, 126, 34,1.0)',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: pcs
                            }
                        ]
                    };

                    var graphTarget = $("#pcschart");

                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        animation: false,
                        data: chartdata,
                        options: {
                            animation: false
                        }
                    });
                });
            }
        }

        // Température
        function lpopChart()
        {
            {
                $.post("../scripts/realtime_dust.php",
                function (data)
                {
                    console.log(data);
                     var lpo_percentage = [];
                     var date = [];

                    for (var i in data) {
                        lpo_percentage.push(data[i].lpo_percentage);
                        date.push(data[i].date);
                    }

                    var chartdata = {
                        labels: date,
                        datasets: [
                            {
                                label: 'Taux d\'impulsion (%)',
                                backgroundColor: 'rgba(73, 226, 255, 0.2)',
                                borderColor: 'rgba(73, 226, 255, 1)',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: lpo_percentage
                            },
                        ],
                    };

                    var graphTarget = $("#lpopchart");

                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata,
                        options: {
                            animation: false
                        }
                    });
                });
            }
        }

        // Moyenne
        var ctxm = document.getElementById('moyenne').getContext('2d');
        var myChart = new Chart(ctxm, {
            type: 'bar',
            data: {
                labels: ['<?php results_lpop_time_function(0) ?>', '<?php results_lpop_time_function(1) ?>', '<?php results_lpop_time_function(2) ?>', '<?php results_lpop_time_function(3) ?>', '<?php results_lpop_time_function(4) ?>', '<?php results_lpop_time_function(5) ?>', '<?php results_lpop_time_function(6) ?>'],
                datasets: [{
                    label: 'Concentration (PCS)',
                    data: ['<?php results_pcs_function(0) ?>', '<?php results_pcs_function(1) ?>', '<?php results_pcs_function(2) ?>', '<?php results_pcs_function(3) ?>', '<?php results_pcs_function(4) ?>', '<?php results_pcs_function(5) ?>', '<?php results_pcs_function(6) ?>'],
                    backgroundColor: 'rgba(231, 76, 60, 0.2)',
                    borderColor: 'rgba(231, 76, 60, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Taux d\'impulsion (%)',
                    data: ['<?php results_lpop_function(0) ?>', '<?php results_lpop_function(1) ?>', '<?php results_lpop_function(2) ?>', '<?php results_lpop_function(3) ?>', '<?php results_lpop_function(4) ?>', '<?php results_lpop_function(5) ?>', '<?php results_lpop_function(6) ?>'],
                    backgroundColor: 'rgba(46, 204, 113,0.2)',
                    borderColor: 'rgba(46, 204, 113,1.0)',
                    borderWidth: 1
                },]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>

</html>