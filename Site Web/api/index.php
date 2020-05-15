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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Fichier CSS du site -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Scrollbar Custom CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Prism -->
    <link href="../assets/css/prism.css" rel="stylesheet" />
    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/7a293f3dad.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.2.0/styles/default.min.css">


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
                    <a href="#sensors" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-microchip"></i> Capteurs</a>
                    <ul class="collapse list-unstyled" id="sensors">
                        <li>
                            <a href="../sensors/index.php">Humidité</a>
                        </li>
                        <li>
                            <a href="../sensors/dust.php">Poussières</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../reports/index.php"><i class="fas fa-chart-area"></i> Relevés</a>
                </li>
                <li>
                    <a href="#resources" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-book"></i> Ressources</a>
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
                <li class="active">
                    <a href="index.php"><i class="fas fa-wrench"></i> API</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="../ressources/programs.php" class="download">Application
                        mobile</a>
                </li>
                <li>
                    <a href="https://github.com/quenquen147/serre-mars" class="article" target="__blank">Consulter sur GitHub</a>
                </li>
            </ul>
        </nav>

        <!-- Contenu -->
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
                    <h2 class="page-header">API<small></small></h2>
                </div>

                <div class="row mb-3">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Indications</h5>
                                <p>
                                    Une API est un ensemble de définitions et de protocoles qui facilite la création et l'intégration de logiciels d'applications. 
                                    API est un acronyme anglais qui signifie « Application Programming Interface », 
                                    que l'on traduit par interface de programmation d'application. Ici, nous l'utilisons 
                                    principalement pour faire transiter l'ensemble des informations relatives aux capteurs vers l'application mobile (relevés de la température, humidité, poussière...).
                                    Le format de données textuelles utilisé est le JSON. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-header">
                                Liste des actions disponibles
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Capteur de poussière</h5>
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" type="button" data-toggle="collapse" data-target="#collapseDust">
                                            <div class="d-flex">
                                                <button class="btn mr-auto">
                                                    sensor/dust
                                                </button>
                                                <span class="d-none d-xl-block pt-2 mr-auto">Récupère l'ensemble des mesures relatives au capteur</span>
                                                <h4><span class="badge badge-success">GET</span><h4>
                                            </div>
                                        </div>

                                        <div id="collapseDust" class="collapse">
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><strong>Description:</strong> Récupère l'ensemble des mesures relatives au capteur de poussières (temps, taux, concentration)</li>
                                                    <li class="list-group-item"><strong>Paramètre(s):</strong> 
                                                        Aucune
                                                    </li>
                                                    <li class="list-group-item"><strong>URL:</strong> <a class="link" href="sensor/dust">https://serre.quentinsavean.fr/api/sensor/dust</a></li>
                                                    <li class="list-group-item"><strong>Exemple:</strong>
                                                        <pre><code class="language-json">[{"id":"1","date":"2020-05-07 15:32:25","lpo_time":"914","lpo_percentage":"3.05","pcs":"1580.72"}]</code></pre>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" type="button" data-toggle="collapse" data-target="#collapseLpop" aria-expanded="true" aria-controls="collapseLpop">
                                            <div class="d-flex">
                                                <button class="btn mr-auto">
                                                    sensor/dust/lpop
                                                </button>
                                                <span class="d-none d-xl-block pt-2 mr-auto">Récupère l'ensemble des mesures relatives aux taux d'impulsion (LPO%)</span>
                                                <h4><span class="badge badge-success">GET</span><h4>
                                            </div>
                                        </div>
                                        <div id="collapseLpop" class="collapse">
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><strong>Description:</strong> Récupère l'ensemble des mesures relatives aux taux d'impulsion (LPO%)</li>
                                                    <li class="list-group-item"><strong>Paramètre(s):</strong> 
                                                        <button class="btn mr-auto">
                                                            /last
                                                        </button> - Récupère la dernière valeur créer
                                                    </li>
                                                    <li class="list-group-item"><strong>URL:</strong> <a class="link" href="sensor/dust/lpop">https://serre.quentinsavean.fr/api/sensor/dust/lpop</a></li>
                                                    <li class="list-group-item"><strong>Exemple:</strong>
                                                        <pre><code class="language-json">[{"lpo_percentage":"3.05"}]</code></pre>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" type="button" data-toggle="collapse" data-target="#collapseLpot" aria-expanded="true" aria-controls="collapseLpot">
                                            <div class="d-flex">
                                                <button class="btn mr-auto">
                                                    sensor/dust/lpot
                                                </button>
                                                <span class="d-none d-xl-block pt-2 mr-auto">Récupère l'ensemble des mesures relatives aux temps d'occupation (Temps LPO)</span>
                                                <h4><span class="badge badge-success">GET</span><h4>
                                            </div>
                                        </div>
                                        <div id="collapseLpot" class="collapse">
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><strong>Description:</strong> Récupère l'ensemble des mesures relatives aux temps d'occupation (Temps LPO)</li>
                                                    <li class="list-group-item"><strong>Paramètre(s):</strong> 
                                                        <button class="btn mr-auto">
                                                            /last
                                                        </button> - Récupère la dernière valeur créer
                                                    </li>
                                                    <li class="list-group-item"><strong>URL:</strong> <a class="link" href="sensor/dust/lpot">https://serre.quentinsavean.fr/api/sensor/dust/lpot</a></li>
                                                    <li class="list-group-item"><strong>Exemple:</strong>
                                                        <pre><code class="language-json">[{"lpo_time":"914"}]</code></pre>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" type="button" data-toggle="collapse" data-target="#collapsePcs" aria-expanded="true" aria-controls="collapsePcs">
                                            <div class="d-flex">
                                                <button class="btn mr-auto">
                                                    sensor/dust/pcs
                                                </button>
                                                <span class="d-none d-xl-block pt-2 mr-auto">Récupère l'ensemble des mesures relatives à la concentration de poussière (PCS)</span>
                                                <h4><span class="badge badge-success">GET</span><h4>
                                            </div>
                                        </div>
                                        <div id="collapsePcs" class="collapse">
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><strong>Description:</strong> Récupère l'ensemble des mesures relatives à la concentration de poussière (PCS)</li>
                                                    <li class="list-group-item"><strong>Paramètre(s):</strong> 
                                                        <button class="btn mr-auto">
                                                            /last
                                                        </button> - Récupère la dernière valeur créer
                                                    </li>
                                                    <li class="list-group-item"><strong>URL:</strong> <a class="link" href="sensor/dust/pcs">https://serre.quentinsavean.fr/api/sensor/dust/pcs</a></li>
                                                    <li class="list-group-item"><strong>Exemple:</strong>
                                                        <pre><code class="language-json">[{"pcs":"1580.72"}]</code></pre>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <h5 class="card-title mt-3">Capteur de température et d'humidité (DHT11)</h5>
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" type="button" data-toggle="collapse" data-target="#collapseDHT11" aria-expanded="true" aria-controls="collapseDHT11">
                                            <div class="d-flex">
                                                <button class="btn mr-auto">
                                                    sensor/dht11
                                                </button>
                                                <span class="d-none d-xl-block pt-2 mr-auto">Récupère l'ensemble des mesures relatives au capteur</span>
                                                <h4><span class="badge badge-success">GET</span><h4>
                                            </div>
                                        </div>

                                        <div id="collapseDHT11" class="collapse" aria-labelledby="collapseDHT11" data-parent="#collapseDHT11">
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><strong>Description:</strong> Récupère l'ensemble des mesures relatives au capteur (humidité, température)</li>
                                                    <li class="list-group-item"><strong>Paramètre(s):</strong> 
                                                        Aucune
                                                    </li>
                                                    <li class="list-group-item"><strong>URL:</strong> <a class="link" href="sensor/dht11/">https://serre.quentinsavean.fr/api/sensor/dht11/</a></li>
                                                    <li class="list-group-item"><strong>Exemple:</strong>
                                                        <pre><code class="language-json">[{"id":"1","date":"2020-05-07 14:32:25","humidity":"54","temp":"20"}]</code></pre>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" type="button" data-toggle="collapse" data-target="#collapseHumidity" aria-expanded="true" aria-controls="collapseHumidity">
                                            <div class="d-flex">
                                                <button class="btn mr-auto">
                                                    sensor/dht11/humidity
                                                </button>
                                                <span class="d-none d-xl-block pt-2 mr-auto">Récupère l'ensemble des mesures relatives à l'humidité</span>
                                                <h4><span class="badge badge-success">GET</span><h4>
                                            </div>
                                        </div>

                                        <div id="collapseHumidity" class="collapse" aria-labelledby="collapseHumidity" data-parent="#collapseHumidity">
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><strong>Description:</strong> Récupère l'ensemble des mesures relatives à l'humidité (%)</li>
                                                    <li class="list-group-item"><strong>Paramètre(s):</strong> 
                                                        <button class="btn mr-auto">
                                                            /last
                                                        </button> - Récupère la dernière valeur créer
                                                    </li>
                                                    <li class="list-group-item"><strong>URL:</strong> <a class="link" href="sensor/dht11/humidity">https://serre.quentinsavean.fr/api/sensor/dht11/humidity</a></li>
                                                    <li class="list-group-item"><strong>Exemple:</strong>
                                                        <pre><code class="language-json">[{"humidity":"54"}]</code></pre>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" type="button" data-toggle="collapse" data-target="#collapseTemp" aria-expanded="true" aria-controls="collapseTemp">
                                            <div class="d-flex">
                                                <button class="btn mr-auto">
                                                    sensor/dht11/temp
                                                </button>
                                                <span class="d-none d-xl-block pt-2 mr-auto">Récupère l'ensemble des mesures relatives à la température</span>
                                                <h4><span class="badge badge-success">GET</span><h4>
                                            </div>
                                        </div>

                                        <div id="collapseTemp" class="collapse" aria-labelledby="collapseTemp" data-parent="#collapseTemp">
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><strong>Description:</strong> Récupère l'ensemble des mesures relatives à la température (°C)</li>
                                                    <li class="list-group-item"><strong>Paramètre(s):</strong> 
                                                        <button class="btn mr-auto">
                                                            /last
                                                        </button> - Récupère la dernière valeur créer
                                                    </li>
                                                    <li class="list-group-item"><strong>URL:</strong> <a class="link" href="sensor/dht11/temp">https://serre.quentinsavean.fr/api/sensor/dht11/temp</a></li>
                                                    <li class="list-group-item"><strong>Exemple:</strong>
                                                        <pre><code class="language-json">[{"temp":"20"}]</code></pre>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>
    <!-- ChartJS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!-- Script JS -->
    <script src="../assets/js/script.js"></script>
    <!-- Prism -->
    <script src="../assets/js/prism.js"></script>
</body>

</html>