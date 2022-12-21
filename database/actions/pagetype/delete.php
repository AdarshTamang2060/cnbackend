<?php
require_once "../../database.php";
require_once "../../tables.php";
$db = Database::Instance();

if (isset($_POST['did'])) {

    $did = $_POST['did'];
    // echo "$did";
    $where = "id";
    $value = [$did];
    $info = $db->SelectByCriteria($page_type_table, 'image', 'id', $value);
    $file = $info[0]->image;

    $imgpath = "../../../images/pagetype/";
   
    if($db->delete($page_type_table,$where,$value)){
      unlink($imgpath.$file);
      
        echo "1";

    }


 
}
