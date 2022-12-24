<?php
// checking the request method post/get 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //after submiting a adminform 
    if(isset($_POST["edit_super_admin"])){
      session_start();
        //include validation class
        include "../../validation/validate.php";

        //databaseclass
        require_once "../../database.php";
        $db = Database::Instance();

       //including validtion class and validation opration
         $validation=new validation();
         

        //collecting all form data 
        $name=$_POST["name"];
        $username=$_POST["username"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $cpassword=$_POST["conformpassword"];
        $gender=$_POST["gender"];
        $usertype=$_POST["usertype"];
        $status=$_POST["status"];

        //image information
        $raw_image=$_FILES["adminimage"];
        $img_name=$_FILES["adminimage"]["name"];
        $img_size=$_FILES["adminimage"]["size"];
        $tmp_name=$_FILES["adminimage"]["tmp_name"];
        $imageerror=$_FILES["adminimage"]["error"];
            //image information end

          
 
        

        
         

       
        //image validation 
        if($imageerror===0){

         if($img_size>125000){
              
             $message="Size of the Image Should not be greater than 1 mb";
             $_SESSION["messages"]=$message;
            header("location:http://localhost/cnbackend/showadmin");
         }
         else{
             $img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
             $img_ex_lc=strtolower($img_ex);
             $allowed_exs=array("jpg","png","jpeg");
             if(in_array($img_ex_lc,$allowed_exs))
             {
             $new_img_name=uniqid("IMG-",TRUE).'.'.$img_ex_lc;
             $img_upload_path='../../../images/admin/'.$new_img_name;
             move_uploaded_file($tmp_name,$img_upload_path);
             $imgpath = "../../../images/admin/";
              $img_url=$_POST["img_url"];
              unlink($imgpath.$img_url);


             //password hassing 
             $hash_password=md5($password);
            
             $value=$_POST["id"];

           
             $db->Update("admins",["name"=>"$name","status"=>"$status","username"=>"$username", "email"=>"$email","password"=>"$hash_password","gender"=>"$gender","image"=>"$new_img_name","user_type"=>"$usertype"],"id",[$value]);
             $_SESSION["message"]="New Record Edited..";
             header("location:http://localhost/cnbackend/showadmin");
 
             }
         } 
    }
    else{
            // $message="Image Can't Load";
             $_SESSION["messages"]="Image Can't Load";
            header("location:http://localhost/cnbackend/showadmin");


    }
    //image validation finished
   }
}


 
