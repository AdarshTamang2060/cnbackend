<?php
require_once "../../database.php";
require_once "../../tables.php";
$db = Database::Instance();

if (isset($_POST['did'])) {

    $did = $_POST['did'];
    // echo "$did";
    $where = "id";
    $value = [$did];
    $info = $db->SelectByCriteria($testimonial_table, 'image', 'id', $value);
    $file = $info[0]->image;
   
    $imgpath = "../../../images/testimonials/";
   
    // include ""
    // echo $imgpath.$file;
    // include ""
    if($db->delete($testimonial_table,$where,$value)){
      unlink($imgpath.$file);
     
        echo "1";

    }


 
}
