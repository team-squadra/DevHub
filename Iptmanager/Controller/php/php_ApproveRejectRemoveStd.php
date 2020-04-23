<?php
include '../../../Clink/connectorlink.php';
$clinklocal = $clink;

if (isset($_POST['approve'])) {

    $s_email = $_POST['s_email'];
    // The data to send to the API
    $postData = array(

        'user_email' => $_POST['s_email'],
        'acc_status' => "approved"
    );

    // Setup cURL
    $ch = curl_init('' . $clinklocal . 'user/updateusrstatus');
    curl_setopt_array($ch, array(
        CURLOPT_CUSTOMREQUEST => "PUT",
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

    echo '<script>location ="../../index.php";</script>';

}

if (isset($_POST['reject'])) {

    $s_email = $_POST['s_email'];
     // The data to send to the API
     $postData = array(
        'user_email' => $s_email
    );

    // Setup cURL
    $ch = curl_init('' . $clinklocal . 'user/deleteusr');
    curl_setopt_array($ch, array(
        CURLOPT_CUSTOMREQUEST => "DELETE",
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
    $message = $responseData['message'];

    if($message == "Successfully Deleted"){
        delete_from_student($clinklocal ,$s_email);
    }

}

function delete_from_student($clinklocal ,$s_email){

     // The data to send to the API
     $postData = array(
        'email' => $s_email
    );

    // Setup cURL
    $ch = curl_init('' . $clinklocal . 'students/deletestudent');
    curl_setopt_array($ch, array(
        CURLOPT_CUSTOMREQUEST => "DELETE",
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
    $query_status = $responseData['query_status'];
    if($query_status == "Successfully Deleted" ){
        echo '<script>location ="../../index.php";</script>';
    }
    else{
        echo '<script>alert('.$response.');location ="../../index.php";</script>';
    }
    
    
}