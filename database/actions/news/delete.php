<?php
require_once "../../database.php";
require_once "../../tables.php";
$db = Database::Instance();

if (isset($_POST['did'])) {

    $did = $_POST['did'];
    // echo "$did";
    $where = "id";
    $value = [$did];
    $info = $db->SelectByCriteria($news_table, 'image,slug', 'id', $value);
    $file = $info[0]->image;
    $slug = [$info[0]->slug];
    $imgpath = "../../../images/news/";
   
    // include ""
    // echo $imgpath.$file;
    // include ""
    if($db->delete($news_table,$where,$value)){
      unlink($imgpath.$file);
        echo "1";

    }


 
}
