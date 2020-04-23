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

function get_img_name() {
    var nimage_id = document.getElementById("nimage_id").value;
    var name = nimage_id.split("fakepath")[1];
    document.getElementById("img_input_val").innerHTML = "<i style='font-size: 10px;'>" + name + "</i>";
}