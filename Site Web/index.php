<?php
    include('scripts/config.php');
    include('scripts/stats_dust.php');
    $reqdust = $bdd->query("SELECT * FROM dust ORDER BY id DESC");
    $dust = $reqdust->fetch();
    $reqht = $bdd->query("SELECT * FROM humidity_temp ORDER BY id DESC");
    $ht = $reqht->fetch();
    if(isset($dust['pcs'], $ht['humidity'], $ht['temp'])) {
        $temp = $ht['temp'];
        $humidity = $ht['humidity'];
        $pcs = $dust['pcs'];
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="assets/img/icon.ico" />
    <title>Projet Terminale STI2D - Serre sur Mars</title>   
    
    <meta name="description" content="Projet Terminale STI2D - Serre sur Mars" />
    <meta name="keywords" content="serre, mars, projet, sti2d, raspberry, sensors" />
    <meta name="author" content="Quentin S." />
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
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
                <a href="index.php">
                    <h3 class="serre">Serre</h3> sur <span class="mars">Mars</span>
                </a>
            </div>

            <ul class="list-unstyled components">
                <small class="pl-2 category">MENU</small>
                <li class="active">
                    <a href="index.php"><i class="fas fa-home"></i> Vue d'ensemble</a>
                </li>
                <li>
                    <a href="#sensors" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                            class="fas fa-microchip"></i> Capteurs</a>
                    <ul class="collapse list-unstyled" id="sensors">
                        <li>
                            <a href="sensors/index.php">Humidité</a>
                        </li>
                        <li>
                            <a href="sensors/dust.php">Poussières</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="reports/index.php"><i class="fas fa-chart-area"></i> Relevés</a>
                </li>
                <li>
                    <a href="#resources" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                            class="fas fa-book"></i> Ressources</a>
                    <ul class="collapse list-unstyled" id="resources">
                        <li>
                            <a href="resources/index.php">Cahier des charges</a>
                        </li>
                        <li>
                            <a href="resources/diagrams.php">Diagrammes</a>
                        </li>
                        <li>
                            <a href="resources/sketch.php">Croquis</a>
                        </li>
                        <li>
                            <a href="resources/programs.php">Programmes</a>
                        </li>
                        <li>
                            <a href="resources/mentions.php">Mentions</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="api"><i class="fas fa-wrench"></i> API</a>
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

                    <a href="videos" type="button" class="btn btn-collapse btn-play">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </nav>

            <div class="modules_content">
                <div class="title_section mb-3">
                    <h2 class="page-header">Vue d'ensemble <small></small></h2>
                </div>

                <div class="row">                    
                    <div class="col-sm mb-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="nbr_capteurs">
                                    <i style="float: left;" class="fas fa-microchip fa-3x" aria-hidden="true"></i>
                                    <ul class="stats_card">
                                        <li>
                                            <h2>2</h2>
                                        </li>
                                        <li class="label">Capteurs</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm mb-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="nbr_capteurs">
                                    <img width="55" src="assets/img/dust3.png" alt="">
                                    <ul class="stats_card">
                                        <li>
                                            <h2 class="resultat"><?php if(isset($pcs)) { echo $pcs; } else { echo 0; } ?> PCS</h2>
                                        </li>
                                        <li class="label">Poussières</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                <div class="nbr_capteurs">
                                    <i class="fas fa-tint fa-3x"></i>
                                    <ul class="stats_card">
                                        <li>
                                            <h2 class="resultat_humidity"><?php if(isset($humidity)) { echo $humidity; } else { echo 0; } ?>%</h2>
                                        </li>
                                        <li class="label">Humidité</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm mb-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="nbr_capteurs">
                                    <i class="fas fa-thermometer-three-quarters fa-3x"></i>
                                    <ul class="stats_card">
                                        <li>
                                            <h2 class="resultat_temp"><?php if(isset($temp)) { echo $temp; } else { echo 0; };?>°C</h2>
                                        </li>
                                        <li class="label">Température</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Graphique -->
                <div class="row mt-2 mb-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Graphique</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Moyennes des mesures en pourcentage de la semaine</h6>
                                <canvas id="myChart"></canvas>
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
    <script src="assets/js/script.js"></script>
    <script>
        function refresh_dust() {
            jQuery.ajax({
                url:'scripts/dust.php',
                type:'POST',
                success:function(results) {
                    jQuery(".resultat").html(results).append(' PCS');
                }
            });
        }

        t = setInterval(refresh_dust,1000);

        function refresh_humidity() {
            jQuery.ajax({
                url:'scripts/humidity.php',
                type:'POST',
                success:function(results) {
                    jQuery(".resultat_humidity").html(results).append('%');
                }
            });
        }

        t = setInterval(refresh_humidity,1000);

        function refresh_temp() {
            jQuery.ajax({
                url:'scripts/temp.php',
                type:'POST',
                success:function(results) {
                    jQuery(".resultat_temp").html(results).append('°C');
                }
            });
        }

        t = setInterval(refresh_temp,1000);
    </script>
    <!-- Graphique -->
    <script>
        
        /*///////////////////////////
        /////// GRAPHIQUES /////////
        //////////////////////////*/

        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: ['<?php results_humidity_time_function(0) ?>', '<?php results_humidity_time_function(1) ?>', '<?php results_humidity_time_function(2) ?>', '<?php results_humidity_time_function(3) ?>', '<?php results_humidity_time_function(4) ?>', '<?php results_humidity_time_function(5) ?>', '<?php results_humidity_time_function(6) ?>'],
                datasets: [{
                    label: 'Poussières (LPO%)',
                    backgroundColor: 'rgba(231, 76, 60, 0.2)',
                    borderColor: 'rgba(231, 76, 60, 1)',
                    data: [<?php results_lpop_function(0) ?>, 
                    <?php results_lpop_function(1) ?>, 
                    <?php results_lpop_function(2) ?>, 
                    <?php results_lpop_function(3) ?>, 
                    <?php results_lpop_function(4) ?>, 
                    <?php results_lpop_function(5) ?>, 
                    <?php results_lpop_function(6) ?>]
                },
                {
                    label: 'Humidité (%)',
                    backgroundColor: 'rgba(46, 204, 113,0.2)',
                    borderColor: 'rgba(46, 204, 113,1.0)',
                    data: [<?php results_humidity_function(0) ?>, 
                    <?php results_humidity_function(1) ?>, 
                    <?php results_humidity_function(2) ?>, 
                    <?php results_humidity_function(3) ?>, 
                    <?php results_humidity_function(4) ?>,
                    <?php results_humidity_function(5) ?>, 
                    <?php results_humidity_function(6) ?>]
                }],
            },

            // Configuration options go here
            options: {
                responsive: true,
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