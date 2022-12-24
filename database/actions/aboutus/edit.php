<?php

    //databaseclass
    require_once "../../database.php";
    require_once "../../tables.php";
    $db = Database::Instance();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //image information
    session_start();
    $raw_image = $_FILES["aboutimage"];
    $img_name = $_FILES["aboutimage"]["name"];
    $img_size = $_FILES["aboutimage"]["size"];
    $tmp_name = $_FILES["aboutimage"]["tmp_name"];
    $imageerror = $_FILES["aboutimage"]["error"];
    //image information end
    $slug = $_POST['slug'];

    if ($img_size > 125000) {

        $message = "Size of the Image Should not be greater than 1 mb";
        $_SESSION["messages"] = $message;
        header("location:http://localhost/cnbackend/showaboutus");
    } else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allowed_exs = array("jpg", "png", "jpeg");
        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", TRUE) . '.' . $img_ex_lc;
            $img_upload_path = '../../../images/about/' . $new_img_name;
            $imgpath = "../../../images/about/";
            $img_url=$_POST["img_url"];
            unlink($imgpath.$img_url);
            // move_uploaded_file($tmp_name, $img_upload_path);
        }
    }
    $id=$_POST["id"];
    $insert_params = ['title' => $_POST['title'],'slug' => $slug, 'meta_title' => $_POST['meta_title'], 'meta_description' => $_POST['meta_description'], 'intro_text' => $_POST['introtextckediter'], 'description' => $_POST['detailckediter'],'image'=>$new_img_name,'status'=>$_POST['status']];
    if($db->Update($about_table,$insert_params,"id",[$id])){
        move_uploaded_file($tmp_name, $img_upload_path);
        $params = ['page_name '=> 'about','slug'=>$slug];
        $db->Update($slugs_table,$params,"slug",[$slug]);
        $_SESSION['message']='About Edited Successfully';
        header("location:http://localhost/cnbackend/showaboutus");

    }else{
        $_SESSION['messages']='Content Edited failed';
        header("location:http://localhost/cnbackend/showaboutus");
    }
}
