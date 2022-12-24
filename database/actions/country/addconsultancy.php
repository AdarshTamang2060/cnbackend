<?php

     

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //databaseclass
    session_start();
    require_once "../../database.php";
    require_once "../../tables.php";
    $db = Database::Instance();


  
    if(isset($_POST["consultancy_list"])){
        $consultancy_list=$_POST["consultancy_list"];
       
        foreach($consultancy_list as $list){
            echo $list;
            

        }
    }
    else{

       
        $_SESSION['messages']='To Add You Must Checked At Least One consultancy..';
        header("location:http://localhost/cnbackend/templates/allpages/country/consultancylist.php");

    }
     
     






   
}
