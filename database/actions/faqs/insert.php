<?php

    //databaseclass
    require_once "../../database.php";
    require_once "../../tables.php";
    $db = Database::Instance();
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    //image information
    if($_POST['for']==null){
        $insert_params = ['question'=>$_POST['question'],'answer'=>$_POST['answer']];
        if($db->Insert($faq_table,$insert_params)){
            $_SESSION['message']='Faq Added Successfully';
            header("location:http://localhost/cnbackend/addfaq");
    
        }else{
            $_SESSION['messages']='FaQ Addition failed';
            header("location:http://localhost/cnbackend/addfaq");
        }

    }else{

    }

    $insert_params = ['question'=>$_POST['question'],'answer'=>$_POST['answer'],'faq_of'=>$_POST['for']];
    if($db->Insert($country_faq_table,$insert_params)){
        $_SESSION['message']='Faq Added Successfully';
        header("location:http://localhost/cnbackend/addfaq");

    }else{
        $_SESSION['messages']='FaQ Addition failed';
        header("location:http://localhost/cnbackend/addfaq");
    }
}
