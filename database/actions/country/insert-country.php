<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //image information
    $raw_image=$_FILES["adminimage"];
    $img_name=$_FILES["adminimage"]["name"];
    $img_size=$_FILES["adminimage"]["size"];
    $tmp_name=$_FILES["adminimage"]["tmp_name"];
    $imageerror=$_FILES["adminimage"]["error"];
        //image information end
        //image information
        $raw_video=$_FILES["adminimage"];
        $img_name=$_FILES["adminimage"]["name"];
        $img_size=$_FILES["adminimage"]["size"];
        $tmp_name=$_FILES["adminimage"]["tmp_name"];
        $imageerror=$_FILES["adminimage"]["error"];
            //image information end
    $video = $_POST[''];
// $insert_params = ['country_name'=>$_POST['country_slug'],'status'=>$_POST['status'],'meta_title'=>$_POST['meta_title'],'meta_description'=>$_POST['meta_description'],'intro_text'=>$_POST['intro_text'],'description'=>$_POST['description'],]


}


?>