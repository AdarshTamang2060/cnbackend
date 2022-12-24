<?php

    //databaseclass
    require_once "../../database.php";
    require_once "../../tables.php";
    $db = Database::Instance();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //image information
    session_start();
    $raw_image = $_FILES["img"];
    $img_name = $_FILES["img"]["name"];
    $img_size = $_FILES["img"]["size"];
    $tmp_name = $_FILES["img"]["tmp_name"];
    $imageerror = $_FILES["img"]["error"];
    //image information end
  

    if ($img_size > 125000) {

        $message = "Size of the Image Should not be greater than 1 mb";
        $_SESSION["messages"] = $message;
        header("location:http://localhost/cnbackend/showtestimonial");
    } else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allowed_exs = array("jpg", "png", "jpeg");
        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", TRUE) . '.' . $img_ex_lc;
            $img_upload_path = '../../../images/testimonials/' . $new_img_name;
            $imgpath = "../../../images/testimonials/";
            $img_url=$_POST["img_url"];
            unlink($imgpath.$img_url);
            // move_uploaded_file($tmp_name, $img_upload_path);
        }
    }
    $id=$_POST["id"];
    $insert_params = ['title' => $_POST['title'], 'message' => $_POST['introtextckediter'], 'name' => $_POST['name'],'image'=>$new_img_name,'status'=>$_POST['status']];
    if($db->Update($testimonial_table,$insert_params,"id",[$id])){
        move_uploaded_file($tmp_name, $img_upload_path);

        $_SESSION['message']='Testimonial Edided Successfully';
        header("location:http://localhost/cnbackend/showtestimonial");

    }else{
        $_SESSION['messages']='Testimonial Edited failed';
        header("location:http://localhost/cnbackend/showtestimonial");
    }
}
