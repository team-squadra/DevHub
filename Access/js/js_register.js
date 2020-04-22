function u_register_check() {

    var u_reg_nic_val_id = document.getElementById("u_reg_nic_id").value;
    var u_reg_uname_val_id = document.getElementById("u_reg_uname_id").value;
    var u_reg_email_val_id = document.getElementById("u_reg_email_id").value;
    var u_reg_pass_val_id = document.getElementById("u_reg_pass_id").value;
    var u_reg_conpass_val_id = document.getElementById("u_reg_conpass_id").value;

    var atr_register_loading_bar = document.getElementById("register_loading_bar");
    var atr_register_err_lbl = document.getElementById("u_register_err_lbl");
    var atr_register_submit = document.getElementById("u_register_submit");

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    atr_register_err_lbl.innerHTML = ""; //clr err


    if (u_reg_nic_val_id == "") {

        atr_register_submit.innerHTML = "Sign up";
        atr_register_err_lbl.innerHTML = "NIC is required !";
        atr_register_loading_bar.classList.remove("progress");

    } else if (u_reg_uname_val_id == "") {

        atr_register_submit.innerHTML = "Sign up";
        atr_register_err_lbl.innerHTML = "Username is required !";
        atr_register_loading_bar.classList.remove("progress");

    } else if (u_reg_email_val_id == "") {

        atr_register_submit.innerHTML = "Sign up";
        atr_register_err_lbl.innerHTML = "Email is required !";
        atr_register_loading_bar.classList.remove("progress");

    } else if (u_reg_email_val_id.match(mailformat)) {

        if (u_reg_pass_val_id == "") {

            atr_register_submit.innerHTML = "Sign up";
            atr_register_err_lbl.innerHTML = "Password is required !";
            atr_register_loading_bar.classList.remove("progress");

        } else if (u_reg_conpass_val_id == "") {

            atr_register_submit.innerHTML = "Sign up";
            atr_register_err_lbl.innerHTML = "Confirm your password !";
            atr_register_loading_bar.classList.remove("progress");

        } else if (u_reg_conpass_val_id != u_reg_pass_val_id) {

            atr_register_submit.innerHTML = "Sign up";
            atr_register_err_lbl.innerHTML = "Password Mismatch !";
            document.getElementById("u_reg_pass_id").value = "";
            document.getElementById("u_reg_conpass_id").value = "";
            atr_register_loading_bar.classList.remove("progress");

        } else {

            $.ajax({
                type: 'POST',
                url: 'Controllers/php_registration.php?registration=true',
                data: $("#register_form").serialize(),
                dataType: "JSON",
                beforeSend: function() {
                    $("#u_register_submit").html("Wait........");
                    $(".show-progress").addClass('progress');
                    $("#u_register_submit").attr("disabled", true);
                },
                success: function(feedback) {
                    console.log(feedback);
                    if (feedback['error'] == 'success') {
                        //Registration successful !
                        var r = confirm(
                            'Registration successful !\n\n' +
                            "Login now ? "
                        );
                        if (r == true) {
                            location = feedback['msg'];
                        } else {
                            location.reload();
                        }

                    } else if (feedback['error'] == 'error') {

                        $("#u_register_err_lbl").html(feedback['msg']);
                        $(".show-progress").removeClass('progress');
                        $("#u_register_submit").html("signup");
                        $("#u_register_submit").attr("disabled", false);

                    } else {

                    }
                },
                error: function(error) {
                    console.log(error);
                }
            })

        }

    } else {
        atr_register_submit.innerHTML = "Sign up";
        atr_register_err_lbl.innerHTML = "Invalid Email !";
        atr_register_loading_bar.classList.remove("progress");
    }



}

function change_user_type() {
    var utype = document.getElementById("u_reg_type_id").value;
    if (utype == "student") {
        document.getElementById("u_reg_type_id").value = "expert";
        document.getElementById("u_reg_type_view").innerHTML = "IT Expert";
        document.getElementById("u_register_submit").innerHTML = "Sign up as a IT Expert";
    } else if (utype == "expert") {
        document.getElementById("u_reg_type_id").value = "student";
        document.getElementById("u_reg_type_view").innerHTML = "Student";
        document.getElementById("u_register_submit").innerHTML = "Sign up as a Student";
    }
}

function clr_err() {
    document.getElementById("u_register_err_lbl").innerHTML = "";
}

function redirect_login() {
    window.location.replace("login.php");
}