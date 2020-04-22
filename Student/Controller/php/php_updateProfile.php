<?php
session_start();
include '../../../Clink/connectorlink.php';
$clinklocal = $clink;

if (isset($_POST['updatepro'])) {

    $student_description = $_POST['description'];
    $student_address = $_POST['address'];
    $student_phone_number = $_POST['phone_number'];
    $student_dob = $_POST['dob'];
    $student_gender = $_POST['gender'];
    $student_cimage = $_POST['cimage'];
    $student_nimage = $_FILES['nimage']["name"];

    $student_php = $_POST['php'];
    $student_css = $_POST['css'];
    $student_javascript = $_POST['javascript'];
    $student_c_sharp = $_POST['c_sharp'];
    $student_c_2plus = $_POST['c_2plus'];
    $student_java = $_POST['java'];
    $student_node_js = $_POST['node_js'];
    $student_react_js = $_POST['react_js'];
    $student_python = $_POST['python'];
    $student_ruby = $_POST['ruby'];

    $student_visual_studio = $_POST['visual_studio'];
    $student_eclipse = $_POST['eclipse'];
    $student_netbeans = $_POST['netbeans'];
    $student_atom = $_POST['atom'];
    $student_vs_code = $_POST['vs_code'];
    $student_qt_creator = $_POST['qt_creator'];
    $student_pycharm = $_POST['pycharm'];
    $student_intelliJ_idea = $_POST['intelliJ_idea'];
    $student_code_blocks = $_POST['code_blocks'];
    $student_rubymine = $_POST['rubymine'];


    if ($student_nimage == "") {
        $final_image = $student_cimage;
    } else {
        //Image upload 
        $target_file = basename($_FILES["nimage"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg", "jpeg", "png", "gif");

        // Check extension
        if (in_array($imageFileType, $extensions_arr)) {
            // Convert to base64 
            $final_image = base64_encode(file_get_contents($_FILES['nimage']['tmp_name']));
        } else {
        }
    }

    // The data to send to the API
    $postData = array(

        'email' => $hotel_email,
        'name' => $hotel_name,
        'phone_number' => $hotel_phone_number_input_atr,
        'location' => $hotel_location_input_atr,
        'description' => $hotel_description_input_atr,
        'profile_pic' => $final_hotel_image,
        'pool' => $hotel_pool_input_atr,
        'parking' => $hotel_parking_input_atr,
        'spa' => $hotel_spa_input_atr,
        'bar' => $hotel_bar_input_atr,
        'wifi' => $hotel_wifi_input_atr

    );

    // Setup cURL
    $ch = curl_init('' . $clinklocal . 'user/updateusr');
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

    // Print the date from the response
    $function_status = $responseData['function_status'];

    if ($function_status == "Success") {
        echo '<script>location ="../../profile.php";</script>';
    } else {
        echo '<script>alert("Something went wrong");location ="../../profile.php";</script>';
    }
} else {
    //not set
}



