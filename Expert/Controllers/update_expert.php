<?php
session_start();
include '../../Clink/connectorlink.php';
$clinklocal = $clink;

if(isset($_POST['upload'])){

    $email =$_SESSION["user_email"];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phone_number = $_POST['phone_number'];
    $dob = $_POST['dob'];
    $description = $_POST['description'];
    $company = $_POST['company'];
    $profession = $_POST['profession'];
    $company_id = $_POST['company_id'];

    //Image upload 
    $target_file = basename($_FILES["imagefile"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");
  
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
   
      // Convert to base64 
      $image_base64 = base64_encode(file_get_contents($_FILES['imagefile']['tmp_name']) );
    
    }


    // Display the output 

    //The data to send to the API
    $postData = array(
        'email' => $email,
        'name' => $name,
        'gender' => $gender,
        'phone_number' => $phone_number,
        'dob' => $dob,
        'description' => $description,
        'company' => $company,
        'profession' => $profession,
        'company_id' => $company_id,
        'profile_pic' => $image_base64
    );

    // Setup cURL
    $ch = curl_init( ''.$clinklocal.'itexperts/updateitexperts');
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

    // Print the date from the response
    $status = $responseData['query_status'];
    if($status == "success"){
        header("Location: ../index.php");
    }
    else{
        echo 'Not a valid request';
    }
}
?>

