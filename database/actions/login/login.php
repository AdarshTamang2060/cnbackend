<?php
// checking the request method post/get 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    if(isset($_POST["login"])){
           //databaseclass
            require_once "../../database.php";
          
            $db = Database::Instance();
            $username=$_POST["username"];
            $password=$_POST["password"];
            
             

        // password_verify(string $password, string $hash): 
        
          $admindata=$db->CustomQuery("SELECT username,password,user_type FROM admins WHERE username='$username'");
          foreach($admindata as $data){
            $dbpassword=$data->password;
            $usertype=$data->user_type;
            
           $result=password_verify($password, $dbpassword);
            if($result=="1"){

               if($usertype=="admin"){

              //  echo "admin is here";
                header("location:http://localhost/cnbackend/dashboard");

               }
               elseif($usertype=="user"){
                echo "user";
               }
               else{
                echo "error";
               }

               session_start();
               $_SESSION["username"]=$username;

                

             //  header("location:http://localhost/cnbackend/dashboard");
            }
            else{
                echo "fails";
            }
            

          }
        
     




 
 



    }

 }
