
<?php
session_start();
include '../../../Clink/connectorlink.php';
$clinklocal = $clink;

if (isset($_POST['updatepro'])) {

    if (isset($_SESSION['user_email'])) {

        if (isset($_SESSION['user_name'])) {

            $student_email = $_SESSION['user_email'];
            $student_name = $_SESSION['user_name'];
            $student_description = $_POST['description'];
            $student_address = $_POST['address'];
            $student_phone_number = $_POST['phone_number'];
            $student_dob = $_POST['dob'];
            $student_gender = $_POST['gender'];
            $student_cimage = $_POST['cimage'];
            $student_nimage = $_FILES['nimage']["name"]; //file image
            $student_git = $_POST['git'];
            $student_linkedin = $_POST['linkedin'];
            $student_stack_overflow = $_POST['stack_overflow'];

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


                'email' => $student_email,
                'name' => $student_name,
                'description' => $student_description,
                'address' => $student_address,
                'phone_number' => $student_phone_number,
                'dob' => $student_dob,
                'gender' => $student_gender,
                'profile_pic' => $final_image,
                'git' => $student_git,
                'linkedin' => $student_linkedin,
                'stack_overflow' => $student_stack_overflow,

                'php' => $student_php,
                'css' => $student_css,
                'javascript' => $student_javascript,
                'c_sharp' => $student_c_sharp,
                'c_2plus' => $student_c_2plus,
                'java' => $student_java,
                'node_js' => $student_node_js,
                'react_js' => $student_react_js,
                'python' => $student_python,
                'ruby' => $student_ruby,

                'visual_studio' => $student_visual_studio,
                'eclipse' => $student_eclipse,
                'netbeans' => $student_netbeans,
                'atom' => $student_atom,
                'vs_code' => $student_vs_code,
                'qt_creator' => $student_qt_creator,
                'pycharm' => $student_pycharm,
                'intelliJ_idea' => $student_intelliJ_idea,
                'code_blocks' => $student_code_blocks,
                'rubymine' => $student_rubymine

            );

            // Setup cURL
            $ch = curl_init('' . $clinklocal . 'students/updatestudent');
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
            $query_status = $responseData['query_status'];

            echo '<script>location ="../../index.php";</script>';

        } else {
            //name not set
        }
    } else {
        //email not set
    }
} else {
    //not set
}
