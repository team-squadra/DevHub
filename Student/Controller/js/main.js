function switch_div() {
    document.getElementById("switch_div_btn").style.display = "none";
    document.getElementById("pro_data_input").style.display = "block";
    document.getElementById("pro_data_view").style.display = "none";

}

function get_img_name() {
    var hotel_image_input = document.getElementById("hotel_image_input").value;
    var name = hotel_image_input.split("fakepath")[1];
    document.getElementById("img_input_val").innerHTML = "<i style='font-size: 10px;'>" + name + "</i>";
}