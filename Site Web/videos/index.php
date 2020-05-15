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

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/7a293f3dad.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />


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
                </div>
            </nav>

            <div class="modules_content">
                <div class="title_section mb-3">
                    <h2 class="page-header">Vidéos<small></small></h2>
                </div>

                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Revue de projet (Diaporama)</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Site Web</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Application Mobile</a>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>Revue de projet - Diaporama</h5>
                                        <div class="alert alert-warning" role="alert">
                                            En l'absence du programme nécessaire à la modification des diagrammes (MagicDraw) et de manière générale, il est possible que certains points soient négligés
                                        </div>
                                        
                                        <!-- Video --->
                                        <video id="diapo" playsinline controls data-poster="/path/to/poster.jpg">
                                            <source src="https://civam.fr/wp-content/uploads/sites/4/2014/10/big_buck_bunny.mp4" type="video/mp4" />
                                            <source src="https://civam.fr/wp-content/uploads/sites/4/2014/10/big_buck_bunny.webm" type="video/webm" />

                                            <!-- Sous-titres de la vidéo -->
                                            <track kind="captions" label="Français" src="captions.vtt" srclang="fr" default />
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5>Présentation du site Web</h5>
                                        <!-- Site Web -->
                                        <!-- Video --->
                                        <video id="website" playsinline controls data-poster="/path/to/poster.jpg">
                                            <source src="https://civam.fr/wp-content/uploads/sites/4/2014/10/big_buck_bunny.mp4" type="video/mp4" />
                                            <source src="https://civam.fr/wp-content/uploads/sites/4/2014/10/big_buck_bunny.webm" type="video/webm" />

                                            <!-- Sous-titres de la vidéo -->
                                            <track kind="captions" label="Français" src="captions.vtt" srclang="fr" default />
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="card">
                                    <div class="card-body">
                                        This is some text within a card body.
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
    <!-- Plyr -->
    <script src="https://cdn.plyr.io/3.6.2/plyr.js"></script>
    <script>
        const player = new Plyr('#diapo');
        const player2 = new Plyr('#website');
    </script>
</body>

</html>