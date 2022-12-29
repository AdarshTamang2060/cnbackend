<?php

    //databaseclass
    require_once "../../database.php";
    require_once "../../tables.php";
    $db = Database::Instance();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //image information
    session_start();
    $raw_image = $_FILES["ccimage"];
    $img_name = $_FILES["ccimage"]["name"];
    $img_size = $_FILES["ccimage"]["size"];
    $tmp_name = $_FILES["ccimage"]["tmp_name"];
    $imageerror = $_FILES["ccimage"]["error"];
    //image information end
   $slug = $_POST['slug'];

    if ($img_size > 125000) {

        $message = "Size of the Image Should not be greater than 1 mb";
        $_SESSION["messages"] = $message;
        header("location:http://localhost/cnbackend/showcountry");
    } else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allowed_exs = array("jpg", "png", "jpeg");
        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", TRUE) . '.' . $img_ex_lc;
            $img_upload_path = '../../../images/ccimage/' . $new_img_name;
            // move_uploaded_file($tmp_name, $img_upload_path);
            $imgpath = "../../../images/country-content/";
            $img_url=$_POST["img_url"];
            unlink($imgpath.$img_url);
        }
    }
    $id=$_POST["country_content_id"];
    $insert_params = ['slug' => $slug,'title' => $_POST['title'], "date"=>$_POST['date'], 'meta_title' => $_POST['meta_title'], 'meta_description' => $_POST['meta_description'], 'intro_text' => $_POST['introtextckediter'], 'description' => $_POST['detailckediter'], 'video' => $_POST['video'],'image'=>$new_img_name,'status'=>$_POST['status']];
    if($db->Update($country_content_table,$insert_params,"id",[$id])){
        $params = ['page_name '=> 'country_contents','slug'=>$slug];
        $db->Update($double_slugs_table,$params,"slug",[$slug]);
        move_uploaded_file($tmp_name, $img_upload_path);
        $_SESSION['message']='Country-content Edited Successfully';
        header("location:http://localhost/cnbackend/showcountry");

    }else{
        $_SESSION['messages']='Country-content Edited  failed';
        header("location:http://localhost/cnbackend/showcountry");
    }
}
