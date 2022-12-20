<?php
require_once "../../database.php";
require_once "../../tables.php";
$db = Database::Instance();

if (isset($_POST['did'])) {

    $did = $_POST['did'];
    // echo "$did";
    $where = "id";
    $value = [$did];
    $info = $db->SelectByCriteria($country_table, 'image,country_slug', 'id', $value);
    $file = $info[0]->image;
    $slug = [$info[0]->country_slug];
    $imgpath = "../../../images/country/";
   
    // include ""
    // echo $imgpath.$file;
    // include ""
    if($db->delete($country_table,$where,$value)){
      unlink($imgpath.$file);
      $db->delete($slugs_table,'slug',$slug);
        echo "1";

    }


 
}
