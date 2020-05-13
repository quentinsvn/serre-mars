<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../../../../scripts/api/config/database.php';
include_once '../../../../../scripts/api/objects/product.php';

$database = new Database();
$db = $database->getConnection();
  
$product = new DHT11($db);

$stmt = $product->last_read();
$num = $stmt->rowCount();
  
if($num>0){
  
    $products_arr=array();
  
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
  
        $product_item=array(
            "humidity" => $humidity,
        );
  
        array_push($products_arr, $product_item);
    }
  
    http_response_code(200);
  
    echo json_encode($products_arr);
} else{
  
    http_response_code(404);
  
    echo json_encode(
        array("message" => "Aucune donnée trouvé.")
    );
}

?>