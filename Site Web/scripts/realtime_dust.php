<?php

header('Content-Type: application/json');

require_once('config.php');

$sqlQuery = "SELECT * FROM dust ORDER BY date DESC LIMIT 7";
 
$result = $bdd->query($sqlQuery);

$data = array();
foreach ($result as $row) {
    $data[] = $row;
}


echo json_encode($data);
?>