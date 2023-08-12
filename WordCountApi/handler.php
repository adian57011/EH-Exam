<?php
require_once("index.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //this methods reads the input from the body
    $requestData = json_decode(file_get_contents('php://input'), true);

    
    if (isset($requestData['input'])) {
        //if all is good we shall have the input string here.
        $inputString = $requestData['input'];
        $wordOccurrences = counter($inputString);
        echo json_encode($wordOccurrences);
    } 
    else
    {
        //if all is not good. then we print invalid input. as we did not find the input. 
        http_response_code(400); // Bad Request
        echo json_encode(['error' => 'Invalid input']);
    }
}

?>