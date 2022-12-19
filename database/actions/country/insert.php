<?php 
// checking the request method post/get 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //after submiting a adminform 
    if(isset($_POST["add_country"])){
       session_start();
        //include validation class
        include "../../validation/validate.php";

        //databaseclass
        require_once "../../database.php";
        $db = Database::Instance();

       //including validtion class and validation opration
         $validation=new validation();

         $title=$_POST["title"];
         $date=$_POST["date"];
         $slug=$_POST["slug"];
         $status=$_POST["status"];
         $meta_title=$_POST["meta_title"];
         $meta_discription=$_POST["meta_description"];
         $vedio=$_POST["vedio"];
         $intro_text=$_POST["introtextckediter"];
         $detail=$_POST["detailckediter"];


         
        //image information
        $raw_image=$_FILES["countryimage"];
        $img_name=$_FILES[" countryimage"]["name"];
        $img_size=$_FILES[" countryimage"]["size"];
        $tmp_name=$_FILES[" countryimage"]["tmp_name"];
        $imageerror=$_FILES[" countryimage"]["error"];
        
            //image information end




         
    }
}

?>