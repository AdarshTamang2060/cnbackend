<?php
    require_once "../../database.php";
    require_once "../../tables.php";
    $db = Database::Instance();
    // echo $_POST['did'];

    $cities = $db->SelectByCriteria($ct_district_table,'*','did',[$_POST['did']]);?>
    <option value="">--------------Select City-------------------------</option>
    <?php
    // print_r($district)
    foreach($cities as $data){
        $city = $db->SelectByCriteria($city_table,'*','id',[$data->cid]);
        foreach($city as $drs){
            ?>
            <option value="<?=$drs->id?>"><?=$drs->city?></option>
            <?php
        }
        ?>
        <?php
    }

?>