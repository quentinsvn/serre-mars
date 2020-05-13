<?php
    include('config.php');
    // Capteur de poussière 
    $reqdust = $bdd->query("SELECT * FROM dust ORDER BY id DESC");
    $dust = $reqdust->fetch();
    if(isset($dust['pcs'])) {
        $pcs = $dust['pcs'];
        echo $pcs;
    } else {
        echo 0;
    }
    
?>