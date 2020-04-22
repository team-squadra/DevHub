<?php
session_start();

include '../../Clink/connectorlink.php';
$clinklocal = $clink;

registration($clinklocal);

function registration($clinklocal){

    if (isset($_GET['registration']) && $_GET['registration'] == 'true'){

        $user_nic = $_POST['u_reg_nic'];
        $user_name = $_POST['u_reg_uname'];
        $user_pwd = $_POST['u_reg_pass'];
        $user_email = $_POST['u_reg_email'];
        $user_type = $_POST['u_reg_type'];

        
        // The data to send to the API
        $postData = array(
            'user_nic' => $user_nic,
            'user_name' => $user_name,
            'user_pwd' => $user_pwd,
            'user_email' => $user_email,
            'user_type' => $user_type
        );

        // Setup cURL
        $ch = curl_init(''.$clinklocal.'user/register');
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

        //error
        $query_status = $responseData['query_status'];
        
        //result finalizing
        if ($query_status == "success"){
            registration_setp2($user_nic , $user_name ,$user_email, $user_type , $clinklocal);
        }
        else{
            echo json_encode(['error' => 'error', 'msg' => ''.$query_status.'']);
        }

    }

}


function registration_setp2($user_nic , $user_name ,$user_email, $user_type , $clinklocal){


        //The data to send to the API
        $postData = array(
            'name' => $user_name,
            'email' => $user_email,
        );
    
        if($user_type == "expert"){
            $rstlink ="itexperts/regitexperts";
        }
        else{
            $rstlink ="students/regstudent";
        }
        
        // Setup cURL
        $ch = curl_init(''.$clinklocal.''.$rstlink.'');
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
            echo 'Connection error';
        }
    
        // Decode the response
        $responseData = json_decode($response, TRUE);
    
        // Print the date from the response
        $query_status = $responseData['query_status'];

        //result finalizing
        if ($query_status == "success"){
            echo json_encode(['error' => 'success', 'msg' => 'login.php']);
        }
        else{
            echo json_encode(['error' => 'error', 'msg' => ''.$query_status.'']);
        }

}
