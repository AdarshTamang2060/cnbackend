<?php

    //databaseclass
    require_once "../../database.php";
    require_once "../../tables.php";
    $db = Database::Instance();
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $value=$_POST["id"];
    session_start();
    //image information
    if($_POST['for']==null){

        $insert_params = ['question'=>$_POST['question'],'answer'=>$_POST['answer']];
        if($db->Update($faq_table,$insert_params,"id",[$value])){
            $_SESSION['message']='Faq Edited Successfully';
            header("location:http://localhost/cnbackend/showfaq");
    
        }else{
            $_SESSION['messages']='FaQ Edition failed';
            header("location:http://localhost/cnbackend/showfaq");
        }

    }else{

    }

    $insert_params = ['question'=>$_POST['question'],'answer'=>$_POST['detailckediter'],'faq_of'=>$_POST['for']];
    if($db->Update($country_faq_table,$insert_params,"id",[$value])){
        $_SESSION['message']='Faq Edited Successfully';
        header("location:http://localhost/cnbackend/showfaq");

    }else{
        $_SESSION['messages']='FaQ Edited failed';
        header("location:http://localhost/cnbackend/showfaq");
    }
}
