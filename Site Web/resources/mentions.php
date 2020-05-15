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
    <!-- Fichier CSS du site -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Scrollbar Custom CSS CDN -->
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
                    <a href="#sensors" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                            class="fas fa-microchip"></i> Capteurs</a>
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
                    <a href="#resources" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"><i
                            class="fas fa-book"></i> Ressources</a>
                    <ul class="collapse list-unstyled collapse show" id="resources">
                        <li>
                            <a href="index.php">Cahier des charges</a>
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
                        <li class="active">
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
                    <h2 class="page-header">Mentions<small></small></h2>
                </div>

                <div class="row mb-4">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Mentions</h5>
                                <h6 class="card-subtitle mt-2 mb-2 text-muted">Membres du projet</h6>
                                <ul class="mentions">
                                    <li>Quentin S. (SIN)</li>
                                    <li>Théo L. (SIN)</li>
                                    <li>Lucas F. (SIN)</li>
                                    <li>Orlane B. (AC)</li>
                                </ul>
                                <h6 class="card-subtitle mt-2 mb-2 text-muted">Applications</h6>
                                <ul class="mentions">
                                    <li>Diagrammes: <a class="link" target="__blank" href="https://www.nomagic.com/products/magicdraw">MagicDraw</a>, <a class="link" target="__blank" href="https://www.draw.io">Draw.io</a></li>
                                    <li>Modélisation (AC): <a class="link" target="__blank" href="http://www.sweethome3d.com/fr/">Sweet Home 3D</a></li>
                                    <li>Développement (SIN): <a class="link" target="__blank" href="https://code.visualstudio.com/">Visual Studio Code</a>, <a class="link" target="__blank" href="https://filezilla-project.org/">Filezilla</a>, <a class="link" target="__blank" href="https://www.phpmyadmin.net/">PhpMyAdmin</a>, <a class="link" target="__blank" href="https://balsamiq.com/wireframes/">Balsamiq Mockups</a></li>
                                    <li>Systèmes d'exploitation: <a class="link" target="__blank" href="https://microsoft.com/">Windows</a>, <a class="link" target="__blank" href="https://www.raspberrypi.org/downloads/raspbian/">Raspbian</a></li>
                                </ul>
                                <h6 class="card-subtitle mt-2 mb-2 text-muted">Matériels</h6>
                                <ul class="mentions">
                                    <li><a class="link" target="__blank" href="https://www.seeedstudio.com/Raspberry-Pi-3-Model-B--p-3037.html">Raspberry Pi 3</a></li>
                                    <li><a class="link" target="__blank" href="https://www.seeedstudio.com/GrovePi.html">GrovePi+</a></li>
                                    <li>Capteurs: <a class="link" target="__blank" href="https://www.seeedstudio.com/Grove-Dust-Sensor-PPD42NS.html">Poussière</a>, <a class="link" target="__blank" href="https://www.seeedstudio.com/Grove-Temperature-Humidity-Sensor-DHT11.html">Température & humidité (DHT11)</a></li>
                                </ul>
                                <h6 class="card-subtitle mt-2 mb-2 text-muted">Langages informatiques</h6>
                                <ul class="mentions">
                                    <li>Capteurs: <a class="link" target="__blank" href="https://www.python.org/">Python</a></li>
                                    <li>Site internet: <a class="link" target="__blank" href="https://www.php.net/">PHP</a>, HTML/CSS, Javascript</li>
                                    <li>Base de données: <a class="link" target="__blank" href="https://sql.sh/">SQL</a></li>
                                    <li>Application mobile: Javascript</li>
                                </ul>
                                <h6 class="card-subtitle mt-2 mb-2 text-muted">Bibliothèques/Programmes</h6>
                                <ul class="mentions">
                                    <li>Capteurs: <a class="link" target="__blank" href="https://www.dexterindustries.com/GrovePi/programming/python-library-documentation/">Bibliothèque python Dexter industries</a> (Fabricant des capteurs Grove)</li>
                                    <li>Site internet: <a class="link" target="__blank" href="https://jquery.com/">Jquery</a> (actualisation des données en temps réel), <a class="link" target="__blank" href="https://fontawesome.com/">Font Awesome Icons</a> (outil d'icônes pour sites web), <a class="link" target="__blank" href="https://getbootstrap.com/">Bootstrap</a> (collection d'outils utiles à la création du design de sites et d'applications web.)</li>
                                    <li>Application mobile: <a class="link" target="__blank" href="https://reactnative.dev/">React Native</a></li>
                                </ul>
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
</body>

</html>