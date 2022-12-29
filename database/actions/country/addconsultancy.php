<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cp = "consultancy_pages";
    //databaseclass
    session_start();
    // $consultancy_list = $_POST["consultancy_list"];
    $present_aid = $_POST['consultancy_list'];
    $cid = $_POST['country'];
    require_once "../../database.php";
    require_once "../../tables.php";
    $db = Database::Instance();
    $previous_aid = array();
    $auth_result = $db->SelectByCriteria('consultancy_pages', 'consultancy_id', 'country_id', [$cid]);
    foreach ($auth_result as $datas) {
        $previous_aid[] = $datas->consultancy_id;
    }
    echo "<pre>";
    print_r($present_aid);
    print_r($previous_aid);

    if ($present_aid == null) {
        if($previous_aid!=null){
            foreach($previous_aid as $data){
                $db->delete($cp,'consultancy_id',[$data]);
            }
        }
        $_SESSION['message'] = 'Changes Made Successfully';
        header("location:http://localhost/cnbackend/showcountry");
    }
    elseif ($previous_aid==null && $present_aid!=null){
        foreach($present_aid as $data){
            $db->Insert($cp,['consultancy_id'=>$data,'country_id'=>$cid]);
        }
        $_SESSION['message'] = 'Changes Made Successfully';
        header("location:http://localhost/cnbackend/showcountry");
    }
     else {
        if (count($present_aid) > count($previous_aid)) {
            $inserting_aid = array_diff($present_aid, $previous_aid);
            foreach ($inserting_aid as $aids) {
                $aut_book_params = ['consultancy_id' => $aids,'country_id'=>$cid];
                $db->Insert($cp, $aut_book_params);
            }

            // $obj->select($t_author, '*', null, $where);
            $result = $db->SelectByCriteria('consultancy_pages', 'consultancy_id', 'country_id', [$cid]);
            $table_authors = array();
            foreach ($result as $data) {
                $table_authors[] = $data->consultancy_id;
            }
            // print_r($re_data);
            $re_data = array_diff($table_authors, $present_aid);
            if (count($re_data) != 0) {
                foreach ($re_data as $data) {
                    // $where = "tb_id = {$tb_id} AND aid = {$data}";
                    $obj->delete($cp, $where);
                    $db->delete($cp, 'consultancy_id', [$data]);
                }
            }
            $_SESSION['message'] = 'Consultancy Added to the coountry';
            header("location:http://localhost/cnbackend/showcountry");
        } elseif (count($previous_aid) > count($present_aid)) {

            $new_a = array_diff($present_aid, $previous_aid);
            if (count($new_a) != 0) {
                foreach ($new_a as $aids) {
                    $aut_book_params = ['consultancy_id' => $aids,'country_id'=>$cid];
                    // $obj->insert($t_author, $aut_book_params);
                    $db->Insert($cp, $aut_book_params);
                }
                // $where = "tb_id={$tb_id}";
                // $obj->select($t_author, '*', null, $where);
                $result = $db->SelectByCriteria($cp, 'consultancy_id', 'country_id', [$cid]);
                // = $obj->getResults();
                $table_authors = array();
                foreach ($result as $data) {
                    $table_authors[] = $data->consultancy_id;
                }
                $re_data = array_diff($table_authors, $present_aid);
                // print_r($re_data);
                if (count($re_data) != 0) {
                    foreach ($re_data as $data) {
                        // echo $data;
                        // $where = "tb_id = {$tb_id} AND aid = {$data}";
                        // $obj->delete($t_author, $where);
                        $db->delete($cp, 'consultancy_id', [$data]);
                    }
                }
            } else {
                $new_b = array_diff($previous_aid, $present_aid);
                // $tb_id = $_POST['tb_id'];

                if (count($new_b) != 0) {
                    foreach ($new_b as $data) {
                        // $where = "tb_id = {$tb_id} AND aid= {$data}";
                        // $obj->delete($t_author, $where);
                        $db->delete($cp, 'consultancy_id', [$data]);
                    }
                }
            }
            $_SESSION['message'] = 'Consultancy Added to the coountry';
            header("location:http://localhost/cnbackend/showcountry");
        }

        elseif (count($present_aid) == count($previous_aid)) {
            $diff = array_diff($present_aid, $previous_aid);
            if (count($diff) != null) {
                foreach ($diff as $aids) {
                    $aut_book_params = ['consultancy_id' => $aids,'country_id'=>$cid];
                    // $obj->insert($t_author, $aut_book_params);
                    $db->Insert($cp,$aut_book_params);
                }
                // $where = "tb_id={$tb_id}";
                // $obj->select($t_author, '*', null, $where);
                $result = $db->SelectByCriteria($cp, 'consultancy_id', 'country_id', [$cid]);
                // $result = $obj->getResults();
                $table_authors = array();
                foreach ($result as $data) {
                    $table_authors[] = $data->consultancy_id;
                }
    
                $re_data = array_diff($table_authors, $present_aid);
                if (count($re_data) != 0) {
                    foreach ($re_data as $data) {
                        // $where = "tb_id = {$tb_id} AND aid = {$data}";
                        // $obj->delete($t_author, $where);
                        $db->delete($cp,'consultancy_id',[$data]);
                    }
                }
                $_SESSION['message'] = 'Consultancy Added to the coountry';
                header("location:http://localhost/cnbackend/showcountry");
            }
        }
    }

    // if (isset($_POST["consultancy_list"])) {

    //     foreach ($consultancy_list as $list) {
    //         $db->Insert('consultancy_pages', ['country_id' => $cid, 'consultancy_id' => $list]);
    //     }
    //     $_SESSION['message'] = 'Consultancy Added to the coountry';
    //     header("location:http://localhost/cnbackend/showcountry");
    // } 
    
    // else {


    //     $_SESSION['messages'] = 'To Add You Must Checked At Least One consultancy..';
    //     header("location:http://localhost/cnbackend/templates/allpages/country/consultancylist.php");
    // }
}
