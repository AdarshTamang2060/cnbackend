<?php
require_once "../../database.php";
require_once "../../tables.php";
$db = Database::Instance();

if (isset($_POST['did'])) {

    $did = $_POST['did'];
    // echo "$did";
    $where = "id";
    $value = [$did];
    $info = $db->SelectByCriteria($country_table, 'image', 'id', $value);
    $file = $info[0]->image;
    $imgpath = "../../../images/country/";
   
    // include ""
    // echo $imgpath.$file;
    // include ""
    if($db->delete($country_table,$where,$value)){
      unlink($imgpath.$file);
        echo "1";

    }


 
}
