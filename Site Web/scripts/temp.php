<?php
    include('config.php');
    // Capteur d'humidité & température
    $reqt = $bdd->query("SELECT temp FROM humidity_temp ORDER BY id DESC");
    $t = $reqt->fetch();
    if(isset($t['temp'])) {
     $temp = $t['temp'];
     echo $temp;
    } else {
        echo 0;
    }
?>