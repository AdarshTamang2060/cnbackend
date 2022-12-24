<?php

    //databaseclass
    require_once "../../database.php";
    require_once "../../tables.php";
    $db = Database::Instance();
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $value=$_POST["id"];
    session_start();
    
        $insert_params = ['question'=>$_POST['question'],'answer'=>$_POST['detailckediter']];
        if($db->Update("faqs",$insert_params,"id",[$value])){
            $_SESSION['message']='Faq Edited Successfully';
            header("location:http://localhost/cnbackend/showfaq");
    
        }else{
            $_SESSION['messages']='FaQ Edition failed';
            header("location:http://localhost/cnbackend/showfaq");
        }
 
}
