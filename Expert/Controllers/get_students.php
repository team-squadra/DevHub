<?php
include '../Clink/connectorlink.php';
$clinklocal = $clink;

$ch = curl_init( ''.$clinklocal.'students/allstudents');
curl_setopt_array($ch, array(
    CURLOPT_RETURNTRANSFER => TRUE
));
// Send the requests
$response = curl_exec($ch);

// Check for errors
if($response === FALSE){
    die(curl_error($ch));
    echo 'No responce';
}


// Decode the response
$responseData = json_decode($response, true);


?>