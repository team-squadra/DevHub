<?php
include '../Clink/connectorlink.php';
$clinklocal = $clink;

if (isset($_SESSION["user_email"])) {
    
    // The data to send to the API
    $postData = array(
        'email' => $_SESSION["user_email"]
    );

    // Setup cURL
    $ch = curl_init(''.$clinklocal.'students/studentfromemail');
    curl_setopt_array($ch, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
        CURLOPT_POSTFIELDS => json_encode($postData)
    ));

    // Send the request
    $response = curl_exec($ch);
    
    // Check for errors
    if ($response === FALSE) {
        die(curl_error($ch));
        echo 'Dead';
    }

    // Decode the response
    $responseData = json_decode($response, TRUE);
    
} else {
    echo "not found";
}
