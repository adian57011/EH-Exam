<?php 
require_once("index.php");

//this is the main handler page of the api.


//we check for the reqeust
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    //when the json file will come we decode it to see the product ids
    $requestData = json_decode(file_get_contents('php://input'), true);

    //set & calculate using the methods
    if (isset($requestData['product_ids'])) {
        $productIds = $requestData['product_ids'];
        $totalPrice =calculate($productIds);

        //finally we send the json back 
        header('Content-Type: application/json');
        echo json_encode(['total_price' => $totalPrice]);
    } else {
        http_response_code(400); // Bad Request
        echo json_encode(['error' => 'Invalid input']);
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(['error' => 'Method not allowed']);
}


?>