<?php
require_once "../../database.php";
require_once "../../tables.php";
$db = Database::Instance();

if (isset($_POST['did'])) {

    $did = $_POST['did'];
    // echo "$did";
    $where = "id";
    $value = [$did];
   
    // include ""
    // echo $imgpath.$file;
    // include ""
    if($db->delete($contact_table,$where,$value)){
        echo "1";

    }


 
}
