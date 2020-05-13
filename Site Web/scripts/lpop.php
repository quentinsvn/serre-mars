<?php
    include('config.php');
    // Capteur de poussière 
    $reqdust = $bdd->query("SELECT * FROM dust ORDER BY id DESC");
    $dust = $reqdust->fetch();
    if(isset($dust['lpo_percentage'])) {
        $lpop = $dust['lpo_percentage'];
        echo $lpop;
    } else {
        echo 0;
    }
    
?>