<?php
require_once "../../database.php";
require_once "../../tables.php";
$db = Database::Instance();

if (isset($_POST['did'])) {

    $did = $_POST['did'];
    // echo "$did";
    $where = "id";
    $value = [$did];
    $info = $db->SelectByCriteria($admin_table, 'image', 'id', $value);
    $file = $info[0]->image;
    $imgpath = "../../../images/admin/";
   
    // include ""
    // echo $imgpath;
    // include ""
    if($db->delete($admin_table,$where,$value)){
      unlink($imgpath.$file);
        echo "1";

    }


 
}
