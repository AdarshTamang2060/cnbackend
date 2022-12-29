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
        
          $admindata=$db->CustomQuery("SELECT username,password,user_type,consultancy_id FROM admins WHERE username='$username'");
          if(empty($admindata)){
                    session_start();
                    $_SESSION["message"]="login fail";
                    header("location:http://localhost/cnbackend/");
             
          }
          else{
              foreach($admindata as $data){
                $dbpassword=$data->password;
                $usertype=$data->user_type;
                $consultancy_id=$data->consultancy_id;
                
              $result=password_verify($password, $dbpassword);
              echo $result;
                if($result=="1"){

                  if($usertype=="admin"){

                      session_start();
                      $_SESSION["username"]=$username;
                      $_SESSION["usertype"]=$usertype;
                    header("location:http://localhost/cnbackend/dashboard");

                  }
                  elseif($usertype=="user"){
                    session_start();
                    $_SESSION["username"]=$username;
                    $_SESSION["usertype"]=$usertype;
                    $_SESSION["consultancy_id"]=$consultancy_id;

                  header("location:http://localhost/cnbackend/consultancydashboard");
                  

                  }
                  else{
                    session_start();
                    $_SESSION["message"]="login fail";
                    header("location:http://localhost/cnbackend/consultancydashboard");
                    
                  }

                  
                }
                else{
                    session_start();
                    $_SESSION["message"]="login fail";
                    header("location:http://localhost/cnbackend/");
                    
                }
              
              }            

          }
        
     




 
 



    }

 }
