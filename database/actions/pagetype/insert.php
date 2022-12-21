<?php

    //databaseclass
    require_once "../../database.php";
    require_once "../../tables.php";
    $db = Database::Instance();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //image information
    session_start();
    $raw_image = $_FILES["pagetypeimage"];
    $img_name = $_FILES["pagetypeimage"]["name"];
    $img_size = $_FILES["pagetypeimage"]["size"];
    $tmp_name = $_FILES["pagetypeimage"]["tmp_name"];
    $imageerror = $_FILES["pagetypeimage"]["error"];
    //image information end
    $slug = $_POST['slug'];

    if ($img_size > 125000) {

        $message = "Size of the Image Should not be greater than 1 mb";
        $_SESSION["messages"] = $message;
        header("location:http://localhost/cnbackend/addpagetype");
    } else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allowed_exs = array("jpg", "png", "jpeg");
        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", TRUE) . '.' . $img_ex_lc;
            $img_upload_path = '../../../images/pagetype/' . $new_img_name;
            // move_uploaded_file($tmp_name, $img_upload_path);
        }
    }
    $insert_params = ['title' => $_POST['title'],'slug' => $slug,  'description' => $_POST['detailckediter'],'image'=>$new_img_name,'status'=>$_POST['status']];
    if($db->Insert($page_type_table,$insert_params)){
        move_uploaded_file($tmp_name, $img_upload_path);
        // $params = ['page_name '=> 'content','slug'=>$slug];
        // $db->Insert($slugs_table,$params);
        $_SESSION['message']='Page Type Added Successfully';
        header("location:http://localhost/cnbackend/addpagetype");

    }else{
        $_SESSION['messages']='Pager Type Addition failed';
        header("location:http://localhost/cnbackend/addpagetype");
    }
}
