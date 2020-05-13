<?php
    include('config.php');
    // Capteur d'humidité & température
    $reqh = $bdd->query("SELECT humidity FROM humidity_temp ORDER BY id DESC");
    $h = $reqh->fetch();
    if(isset($h['humidity'])) {
        $humidity = $h['humidity'];
        echo $humidity;
    } else {
        echo 0;
    }
?>