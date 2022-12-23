<?php

    //databaseclass
    require_once "../../database.php";
    require_once "../../tables.php";
    $db = Database::Instance();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //image information
    session_start();
    $raw_image = $_FILES["newsimage"];
    $img_name = $_FILES["newsimage"]["name"];
    $img_size = $_FILES["newsimage"]["size"];
    $tmp_name = $_FILES["newsimage"]["tmp_name"];
    $imageerror = $_FILES["newsimage"]["error"];
    //image information end
    $slug = $_POST['slug'];

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
            $img_upload_path = '../../../images/news/' . $new_img_name;
            // move_uploaded_file($tmp_name, $img_upload_path);
        }
    }
    $insert_params = ['title' => $_POST['title'],'slug' => $_POST["slug"],'date'=>$_POST['date'], 'meta_title' => $_POST['meta_title'], 'meta_description' => $_POST['meta_description'], 'intro_text' => $_POST['introtextckediter'], 'description' => $_POST['detailckediter'], 'video' => $_POST['video'],'image'=>$new_img_name,'status'=>$_POST['status']];
    if($db->Insert($news_table,$insert_params)){
        move_uploaded_file($tmp_name, $img_upload_path);
        // $params = ['page_name '=> 'content','slug'=>$slug];
        // $db->Insert($slugs_table,$params);
        $_SESSION['message']='News Added Successfully';
        header("location:http://localhost/cnbackend/addnews");

    }else{
        $_SESSION['messages']='News Addition failed';
        header("location:http://localhost/cnbackend/addnews");
    }
}
