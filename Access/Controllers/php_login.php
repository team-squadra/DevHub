<?php
session_start();

include '../../Clink/connectorlink.php';
$clinklocal = $clink;


    if (isset($_GET['login']) && $_GET['login'] == 'true'){

        $email = $_POST['lg_email'];
        $password = $_POST['lg_password'];

        // The data to send to the API
        $postData = array(
            'user_email' => $email,
            'user_pwd' => $password
        );

        // Setup cURL
        $ch = curl_init( ''.$clinklocal.'user/login');
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
        if($response === FALSE){
            die(curl_error($ch));
            echo 'Dead';
        }

        // Decode the response
        $responseData = json_decode($response, TRUE);

        // Print the date from the response
        $query_status = $responseData['query_status'];

        if ($query_status == "success") {
            
            $user_name = $responseData['user_name'];
            $user_email = $responseData['user_email'];
            $user_nic = $responseData['user_nic'];
            $user_type = $responseData['user_type'];
            $acc_status = $responseData['acc_status'];
            $token = $responseData['token'];

            $_SESSION["user_name"] = $user_name;
            $_SESSION["user_email"] = $user_email;
            $_SESSION["user_nic"] = $user_nic;
            $_SESSION["user_type"] = $user_type;
            $_SESSION["acc_status"] = $acc_status;
            
            if ($user_type == "student") {
                
                echo json_encode(['error' => 'success', 'msg' => '../Student/index.php']);

            } else if($user_type == "expert") {

                echo json_encode(['error' => 'success', 'msg' => '../Expert/index.php']);
            }
            else if($user_type == "iptmanager"){

                echo json_encode(['error' => 'success', 'msg' => '../Iptmanager/index.php']);
            }
        } else {
          echo json_encode(['error' => 'error', 'msg' => ''.$query_status.'']);
        }

    }
