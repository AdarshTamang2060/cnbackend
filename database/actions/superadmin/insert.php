<?php
// checking the request method post/get 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //after submiting a adminform 
    if(isset($_POST["add_super_admin"])){
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

        //image information
        $raw_image=$_FILES["adminimage"];
        $img_name=$_FILES["adminimage"]["name"];
        $img_size=$_FILES["adminimage"]["size"];
        $tmp_name=$_FILES["adminimage"]["tmp_name"];
        $imageerror=$_FILES["adminimage"]["error"];
            //image information end

         
        //passing  vlaue as array in validation class
        $checkempty=$validation->checkempty([$name,$username,$email,$password,$cpassword,$gender,$usertype,$raw_image]);
        $checkpassword=$validation->checkcpass($password,$cpassword);
        $checkemail=$validation->checkemail($email);
 
        if($checkempty){
             
            $message="required all field"; 
            $_SESSION["message"]=$message;
            header("location:http://localhost/cnbackend/createadmin");

        }

        elseif($checkpassword){
          
            $message="password should be Same";
            $_SESSION["message"]=$message;
            header("location:http://localhost/cnbackend/createadmin");


        }
        elseif($checkemail){
         
            $message="Enter a Valid Email";
            $_SESSION["message"]=$message;
            header("location:http://localhost/cnbackend/createadmin");


        }
        else{

         

       
        //image validation 
        if($imageerror===0){

         if($img_size>125000){
              
             $message="Size of the Image Should not be greater than 1 mb";
             $_SESSION["message"]=$message;
            header("location:http://localhost/cnbackend/createadmin");
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


             //password hassing 
             $hash_password=md5($password);
             
             
             $db->Insert("admins",["name"=>"$name", "username"=>"$username", "email"=>"$email","password"=>"$hash_password","gender"=>"$gender","image"=>"$new_img_name","user_type"=>"$usertype"]);
            // message if insert sucessfully.
             $message="1 Record Added..";
             $_SESSION["message"]=$message;
             header("location:http://localhost/cnbackend/createadmin");
             }
         } 
    }
    else{
            $message="Image Can't Load";
             $_SESSION["message"]=$message;
            header("location:http://localhost/cnbackend/createadmin");


    }
    //image validation finished
   }
}


 }


 
?>