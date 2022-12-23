<?php
    require_once "../../database.php";
    require_once "../../tables.php";
    $db = Database::Instance();

    $district = $db->SelectByCriteria($Province_District_table,'*','pid',[$_POST['pid']]);?>
    <option value="">--------------Select District-------------------------</option>
    <?php
    // print_r($district)
    foreach($district as $data){
        $districts = $db->SelectByCriteria($district_table,'*','id',[$data->did]);
        foreach($districts as $drs){
            ?>
            <option value="<?=$drs->id?>"><?=$drs->district_name?></option>
            <?php
        }
        ?>
        <?php
    }
?>