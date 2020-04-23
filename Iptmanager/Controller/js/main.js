function switch_div(xx) {
    if (xx == 1) {
        document.getElementById("switch_div_btn").style.display = "none";
        document.getElementById("pro_data_input").style.display = "block";
        document.getElementById("pro_data_view").style.display = "none";
    } else {
        document.getElementById("switch_div_btn").style.display = "block";
        document.getElementById("pro_data_input").style.display = "none";
        document.getElementById("pro_data_view").style.display = "block";
    }
}

function switch_skill_div(xx) {
    if (xx == 1) {
        document.getElementById("update_skills_btn").style.display = "none";
        document.getElementById("pro_skill_input").style.display = "block";
        document.getElementById("pro_skill_view").style.display = "none";
    } else {
        document.getElementById("update_skills_btn").style.display = "block";
        document.getElementById("pro_skill_input").style.display = "none";
        document.getElementById("pro_skill_view").style.display = "block";
    }
}

function get_img_name() {
    var nimage_id = document.getElementById("nimage_id").value;
    var name = nimage_id.split("fakepath")[1];
    document.getElementById("img_input_val").innerHTML = "<i style='font-size: 10px;'>" + name + "</i>";
}

changeload_idelbl();

function changeload_idelbl() {

    var yy1 = document.getElementById("id_visual_studio").value;
    if (yy1 == 1) {
        document.getElementById("lbl1").classList.add("idelbl-bg");
    } else {
        document.getElementById("lbl1").classList.remove("idelbl-bg");
    }

    var yy2 = document.getElementById("id_eclipse").value;
    if (yy2 == 1) {
        document.getElementById("lbl2").classList.add("idelbl-bg");
    } else {
        document.getElementById("lbl2").classList.remove("idelbl-bg");
    }

    var yy3 = document.getElementById("id_netbeans").value;
    if (yy3 == 1) {
        document.getElementById("lbl3").classList.add("idelbl-bg");
    } else {
        document.getElementById("lbl3").classList.remove("idelbl-bg");
    }

    var yy4 = document.getElementById("id_atom").value;
    if (yy4 == 1) {
        document.getElementById("lbl4").classList.add("idelbl-bg");
    } else {
        document.getElementById("lbl4").classList.remove("idelbl-bg");
    }

    var yy5 = document.getElementById("id_vs_code").value;
    if (yy5 == 1) {
        document.getElementById("lbl5").classList.add("idelbl-bg");
    } else {
        document.getElementById("lbl5").classList.remove("idelbl-bg");
    }

    var yy6 = document.getElementById("id_qt_creator").value;
    if (yy6 == 1) {
        document.getElementById("lbl6").classList.add("idelbl-bg");
    } else {
        document.getElementById("lbl6").classList.remove("idelbl-bg");
    }

    var yy7 = document.getElementById("id_pycharm").value;
    if (yy7 == 1) {
        document.getElementById("lbl7").classList.add("idelbl-bg");
    } else {
        document.getElementById("lbl7").classList.remove("idelbl-bg");
    }

    var yy8 = document.getElementById("id_intelliJ_idea").value;
    if (yy8 == 1) {
        document.getElementById("lbl8").classList.add("idelbl-bg");
    } else {
        document.getElementById("lbl8").classList.remove("idelbl-bg");
    }

    var yy9 = document.getElementById("id_code_blocks").value;
    if (yy9 == 1) {
        document.getElementById("lbl9").classList.add("idelbl-bg");
    } else {
        document.getElementById("lbl9").classList.remove("idelbl-bg");
    }

    var yy10 = document.getElementById("id_rubymine").value;
    if (yy10 == 1) {
        document.getElementById("lbl10").classList.add("idelbl-bg");
    } else {
        document.getElementById("lbl10").classList.remove("idelbl-bg");
    }
}


function change_idelbl(xx) {
    if (xx == 1) {
        var yy = document.getElementById("id_visual_studio").value;
        if (yy == 0) {
            document.getElementById("id_visual_studio").value = 1;
            document.getElementById("lbl1").classList.toggle("idelbl-bg");
        } else {
            document.getElementById("id_visual_studio").value = 0;
            document.getElementById("lbl1").classList.toggle("idelbl-bg");
        }
    } else if (xx == 2) {
        var yy = document.getElementById("id_eclipse").value;
        if (yy == 0) {
            document.getElementById("id_eclipse").value = 1;
            document.getElementById("lbl2").classList.toggle("idelbl-bg");
        } else {
            document.getElementById("id_eclipse").value = 0;
            document.getElementById("lbl2").classList.toggle("idelbl-bg");
        }
    } else if (xx == 3) {
        var yy = document.getElementById("id_netbeans").value;
        if (yy == 0) {
            document.getElementById("id_netbeans").value = 1;
            document.getElementById("lbl3").classList.toggle("idelbl-bg");
        } else {
            document.getElementById("id_netbeans").value = 0;
            document.getElementById("lbl3").classList.toggle("idelbl-bg");
        }
    } else if (xx == 4) {
        var yy = document.getElementById("id_atom").value;
        if (yy == 0) {
            document.getElementById("id_atom").value = 1;
            document.getElementById("lbl4").classList.toggle("idelbl-bg");
        } else {
            document.getElementById("id_atom").value = 0;
            document.getElementById("lbl4").classList.toggle("idelbl-bg");
        }
    } else if (xx == 5) {
        var yy = document.getElementById("id_vs_code").value;
        if (yy == 0) {
            document.getElementById("id_vs_code").value = 1;
            document.getElementById("lbl5").classList.toggle("idelbl-bg");
        } else {
            document.getElementById("id_vs_code").value = 0;
            document.getElementById("lbl5").classList.toggle("idelbl-bg");
        }
    } else if (xx == 6) {
        var yy = document.getElementById("id_qt_creator").value;
        if (yy == 0) {
            document.getElementById("id_qt_creator").value = 1;
            document.getElementById("lbl6").classList.toggle("idelbl-bg");
        } else {
            document.getElementById("id_qt_creator").value = 0;
            document.getElementById("lbl6").classList.toggle("idelbl-bg");
        }
    } else if (xx == 7) {
        var yy = document.getElementById("id_pycharm").value;
        if (yy == 0) {
            document.getElementById("id_pycharm").value = 1;
            document.getElementById("lbl7").classList.toggle("idelbl-bg");
        } else {
            document.getElementById("id_pycharm").value = 0;
            document.getElementById("lbl7").classList.toggle("idelbl-bg");
        }
    } else if (xx == 8) {
        var yy = document.getElementById("id_intelliJ_idea").value;
        if (yy == 0) {
            document.getElementById("id_intelliJ_idea").value = 1;
            document.getElementById("lbl8").classList.toggle("idelbl-bg");
        } else {
            document.getElementById("id_intelliJ_idea").value = 0;
            document.getElementById("lbl8").classList.toggle("idelbl-bg");
        }
    } else if (xx == 9) {
        var yy = document.getElementById("id_code_blocks").value;
        if (yy == 0) {
            document.getElementById("id_code_blocks").value = 1;
            document.getElementById("lbl9").classList.toggle("idelbl-bg");
        } else {
            document.getElementById("id_code_blocks").value = 0;
            document.getElementById("lbl9").classList.toggle("idelbl-bg");
        }
    } else if (xx == 10) {
        var yy = document.getElementById("id_rubymine").value;
        if (yy == 0) {
            document.getElementById("id_rubymine").value = 1;
            document.getElementById("lbl10").classList.toggle("idelbl-bg");
        } else {
            document.getElementById("id_rubymine").value = 0;
            document.getElementById("lbl10").classList.toggle("idelbl-bg");
        }
    }
}