<?php
$servername = "xx.xx.xx.xx";
$username = "xxx";
$password = "xxx";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=xxx", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Erreur de connexion: " . $e->getMessage();
    }
?>