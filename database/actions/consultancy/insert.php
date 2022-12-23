<?php

    //databaseclass
    require_once "../../database.php";
    require_once "../../tables.php";
    $db = Database::Instance();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //image information
    session_start();
    $raw_image = $_FILES["consultancyimage"];
    $img_name = $_FILES["consultancyimage"]["name"];
    $img_size = $_FILES["consultancyimage"]["size"];
    $tmp_name = $_FILES["consultancyimage"]["tmp_name"];
    $imageerror = $_FILES["consultancyimage"]["error"];
    //image information end
    $slug = $_POST['consultancy_slug'];

    if ($img_size > 125000) {

        $message = "Size of the Image Should not be greater than 1 mb";
        $_SESSION["messages"] = $message;
        header("location:http://localhost/cnbackend/createadmin");
    } else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allowed_exs = array("jpg", "png", "jpeg");
        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", TRUE) . '.' . $img_ex_lc;
            $img_upload_path = '../../../images/consultancy/' . $new_img_name;
            // move_uploaded_file($tmp_name, $img_upload_path);
        }
    }
    $insert_params = ['consultancy_name' => $_POST['consultancy_name'],'consultancy_slug' => $slug,'consultancy_email'=>$_POST['consultancy_email'] ,'consultancy_address'=>$_POST['consultancy_address'],'consultancy_location'=>$_POST['consultancy_location'],'Province'=>$_POST['province'],'District'=>$_POST['district'],'City'=>$_POST['city'],'consultancy_phone'=>$_POST['consultancy_phone'],'consultancy_mobile'=>$_POST['consultancy_mobile'],'consultancy_fax'=>$_POST['consultancy_fax'],'consultancy_post_box'=>$_POST['consultancy_post_box'],'consultancy_website'=>$_POST['consultancy_website'],'consultancy_meta_title' => $_POST['consultancy_meta_title'], 'consultancy_meta_description' => $_POST['consultancy_meta_description'], 'consultancy_intro_text' => $_POST['introtextckediter'], 'consultancy_description' => $_POST['detailckediter'], 'consultancy_logo'=>$new_img_name,'nickname'=>$_POST['nickname'],'status'=>$_POST['status'],'date'=>$_POST['date']];
    if($db->Insert($consultancy_table,$insert_params)){
        move_uploaded_file($tmp_name, $img_upload_path);
        $params = ['page_name '=> 'consultancies','slug'=>$slug];
        $db->Insert($slugs_table,$params);
        $_SESSION['message']='Consultancy Added Successfully';
        header("location:http://localhost/cnbackend/addconsultancy");

    }else{
        $_SESSION['messages']='Consultancy Addition failed';
        header("location:http://localhost/cnbackend/addconsultancy");
    }
}
