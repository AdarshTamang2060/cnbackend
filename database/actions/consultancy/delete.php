<?php
require_once "../../database.php";
require_once "../../tables.php";
$db = Database::Instance();

if (isset($_POST['did'])) {

    $did = $_POST['did'];
    // echo "$did";
    $where = "id";
    $value = [$did];
    $info = $db->SelectByCriteria($consultancy_table, 'consultancy_logo,consultancy_slug', 'id', $value);
    $file = $info[0]->consultancy_logo;
    $slug = [$info[0]->consultancy_slug];
    $imgpath = "../../../images/consultancy/";
   
    // include ""
    // echo $imgpath.$file;
    // include ""
    if($db->delete($consultancy_table,$where,$value)){
      unlink($imgpath.$file);
      $db->delete($slugs_table,'slug',$slug);
        echo "1";

    }


 
}
