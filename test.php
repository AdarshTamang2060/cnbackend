<?php
include "database.php";
include "tables.php";
$obj = new database();

$text_book = $_POST['textbook_name'];
$sid = $_POST['subject_id'];
$tb_id = $_POST['tb_id'];
$present_aid = $_POST['author_id'];
$pub_id = $_POST['publication_id'];
$price = $_POST['price'];
$pres_quantity = $_POST['pres_quantity'];
$prev_quantity = $_POST['prev_quantity'];
$where = "tb_id=" . $tb_id;


// print_r($present_aid);
$previous_aid = array();
$obj->select($t_author, '*', null, $where);
$auth_result = $obj->getResults();

foreach ($auth_result as $datas) {
    $previous_aid = [$datas['aid']];
}

if ($present_aid == null) {
    $_SESSION['messages'] = " Authors Box Cannot Be empty";
    header("location:display_textbook.php");
} else {
    if (count($present_aid) > count($previous_aid)) {
        $inserting_aid = array_diff($present_aid, $previous_aid);
        foreach ($inserting_aid as $aids) {
            $aut_book_params = ['tb_id' => $tb_id, 'aid' => $aids];
            $obj->insert($t_author, $aut_book_params);
        }
        $where = "tb_id={$tb_id}";
        $obj->select($t_author, '*', null, $where);
        $result = $obj->getResults();
        $table_authors = array();
        foreach ($result as $data) {
            $table_authors[] = $data['aid'];
        }

        $re_data = array_diff($table_authors, $present_aid);
        if (count($re_data) != 0) {
            foreach ($re_data as $data) {
                $where = "tb_id = {$tb_id} AND aid = {$data}";
                $obj->delete($t_author, $where);
            }
        } else {
        }
        if ($pres_quantity > $prev_quantity) {
            $quantity = $pres_quantity - $prev_quantity;

            $add = $prev_quantity;
            $j = 1;
            $a = 0;
            $inf = false;
            for ($i = 1; $i <= $quantity; $i++) {
                initial:
                $bn = $sid . "-" . $tb_id . "-" . $add + $j;
                $where_b = "bn='{$bn}'";
                $obj->select($books_table, '*', null, $where_b);
                $result = $obj->getResults();
                if ($result == null) {
                    $books_param = ['tb_id' => $tb_id, 'bn' => $bn];
                    if ($obj->insert($books_table, $books_param)) {
                        echo "good";
                        $j++;
                    }
                } else {
                    $j++;
                    $a++;
                    $inf = true;
                    goto initial;
                }
                if ($inf == true) {
                    $now = $pres_quantity + $a;
                    $where = "tb_id={$tb_id}";
                    $update_textbook_params = ['textbook' => $text_book, 'sub_id' => $sid, 'pid' => $pub_id, 'quantity' => $now, 'price' => $price];
                    if ($obj->update($textbook_table, $update_textbook_params, $where)) {
                        $_SESSION['message'] = "Some textbook were on issue so keeping their quantity constant   the textbook were added.";
                        header("Location:display_textbook.php");
                    }
                } else {
                    $now = $pres_quantity;
                    $update_textbook_params = ['textbook' => $text_book, 'sub_id' => $sid,  'pid' => $pub_id, 'quantity' => $now, 'price' => $price];
                    if ($obj->update($textbook_table, $update_textbook_params, $where)) {
                        $_SESSION['message'] = "TextBook Details Updated Successfully.";
                        header("Location:display_textbook.php");
                    }
                }
            }
        } elseif (($prev_quantity > $pres_quantity) && ($pres_quantity != 0)) {
            $quantity = $prev_quantity - $pres_quantity;
            $now = $pres_quantity;
            $update_textbook_params = ['textbook' => $text_book, 'sub_id' => $sid,  'pid' => $pub_id, 'quantity' => $now, 'price' => $price];
            $limit = 1;
            if ($obj->update($textbook_table, $update_textbook_params, $where)) {

                $where = "tb_id=" . $tb_id . " AND " . "status!=0 ORDER BY books.bid DESC";
                for ($i = 1; $i <= $quantity; $i++) {
                    if ($obj->delete($books_table, $where, $limit)) {
                        $_SESSION['message'] = "TextBook Details Updated Successfully.";
                    } else {
                        $_SESSION['messages'] = "TextBook Details Updated Successfully.";
                        header("Location:display_textbook.php");
                    }
                }
                header("Location:display_textbook.php");
            } else {
                echo "Hello";
            }
        } elseif ($pres_quantity == 0) {
            $quantity = $prev_quantity - $pres_quantity;

            $info = false;
            $j = 0;
            $select = "count(*)";
            $where = "tb_id=" . $tb_id . " AND " . "status=0 ";
            $obj->select($books_table, $select, null, $where);
            $result = $obj->getResults();
            if ($result == null) {
                $info = false;
            } else {
                $info = true;
                $j = $result[0]['count(*)'];
            }

            if ($info == false) {
                $now = 0;
                $update_textbook_params = ['textbook' => $text_book, 'sub_id' => $sid,  'pid' => $pub_id, 'quantity' => $now, 'price' => $price];
                $where_t = "tb_id = {$tb_id}";
                if ($obj->update($textbook_table, $update_textbook_params, $where_t)) {
                    $limit = 1;
                    $where = "tb_id=" . $tb_id . " AND " . "status!=0 ORDER BY books.bid DESC";
                    for ($i = 1; $i <= $quantity; $i++) {
                        if ($obj->delete($books_table, $where, $limit)) {
                            $_SESSION['message'] = "TextBook Details Updated Successfully.";
                        }
                    }
                    $_SESSION['message'] = "TextBook Details Updated Successfully.";
                    header("Location:display_textbook.php");
                }
            } elseif ($info == true) {
                $now = $j;
                $update_textbook_params = ['textbook' => $text_book, 'sub_id' => $sid, 'pid' => $pub_id, 'quantity' => $now, 'price' => $price];
                $where_t = "tb_id = {$tb_id}";
                if ($obj->update($textbook_table, $update_textbook_params, $where_t)) {
                    $limit = 1;
                    $where = "tb_id=" . $tb_id . " AND " . "status!=0 ORDER BY books.bid DESC";
                    for ($i = 1; $i <= $quantity; $i++) {
                        if ($obj->delete($books_table, $where, $limit)) {
                            $_SESSION['message'] = "TextBook Details Updated Successfully with keeping the issued textbook as constant.";
                        }
                    }
                    $_SESSION['message'] = "TextBook Details Updated Successfully with keeping the issued textbook as constant.";

                    header("Location:display_textbook.php");
                }
            }
        } else {
            $update_textbook_params = ['textbook' => $text_book, 'sub_id' => $sid,  'pid' => $pub_id, 'quantity' => $pres_quantity, 'price' => $price];
            $where = "tb_id = {$tb_id}";
            if ($obj->update($textbook_table, $update_textbook_params, $where)) {
                $_SESSION['message'] = "TextBook Details Updated Successfully.";
                header("Location:display_textbook.php");
            } else {

                header("Location:display_textbook.php");
            }
        }
    } elseif (count($previous_aid) > count($present_aid)) {
        $new_a = array_diff($present_aid, $previous_aid);
        if (count($new_a) != 0) {
            foreach ($new_a as $aids) {
                $aut_book_params = ['tb_id' => $tb_id, 'aid' => $aids];
                $obj->insert($t_author, $aut_book_params);
            }
            $where = "tb_id={$tb_id}";
            $obj->select($t_author, '*', null, $where);
            $result = $obj->getResults();
            $table_authors = array();
            foreach ($result as $data) {
                $table_authors[] = $data['aid'];
            }

            $re_data = array_diff($table_authors, $present_aid);
            if (count($re_data) != 0) {
                foreach ($re_data as $data) {
                    $where = "tb_id = {$tbid} AND $aid = {$data}";
                    $obj->delete($t_author, $where);
                }
            }
        } else {
            $new_b = array_diff($previous_aid, $present_aid);

            if (count($new_b) != 0) {
                foreach ($new_b as $data) {
                    $where = "tb_id = {$tbid} AND $aid = {$data}";
                    $obj->delete($t_author, $where);
                }
            } else {
            }
        }

        if ($pres_quantity > $prev_quantity) {
            $quantity = $pres_quantity - $prev_quantity;

            $add = $prev_quantity;
            $j = 1;
            $a = 0;
            $inf = false;
            for ($i = 1; $i <= $quantity; $i++) {
                mid:
                $bn = $sid . "-" . $tb_id . "-" . $add + $j;
                $where_b = "bn='{$bn}'";
                $obj->select($books_table, '*', null, $where_b);
                $result = $obj->getResults();
                if ($result == null) {
                    $books_param = ['tb_id' => $tb_id, 'bn' => $bn];
                    if ($obj->insert($books_table, $books_param)) {
                        echo "good";
                        $j++;
                    }
                } else {
                    $j++;
                    $a++;
                    $inf = true;
                    goto mid;
                }
                if ($inf == true) {
                    $now = $pres_quantity + $a;
                    $update_textbook_params = ['textbook' => $text_book, 'sub_id' => $sid, 'pid' => $pub_id, 'quantity' => $now, 'price' => $price];
                    if ($obj->update($textbook_table, $update_textbook_params, $where)) {
                        $_SESSION['message'] = "Some textbook were on issue so keeping their quantity constant   the textbook were added.";
                        header("Location:display_textbook.php");
                    }
                } else {
                    $now = $pres_quantity;
                    $update_textbook_params = ['textbook' => $text_book, 'sub_id' => $sid,  'pid' => $pub_id, 'quantity' => $now, 'price' => $price];
                    if ($obj->update($textbook_table, $update_textbook_params, $where)) {
                        $_SESSION['message'] = "TextBook Details Updated Successfully.";
                        header("Location:display_textbook.php");
                    }
                }
            }
        } elseif (($prev_quantity > $pres_quantity) && ($pres_quantity != 0)) {
            $quantity = $prev_quantity - $pres_quantity;
            $now = $pres_quantity;
            $update_textbook_params = ['textbook' => $text_book, 'sub_id' => $sid,  'pid' => $pub_id, 'quantity' => $now, 'price' => $price];
            $limit = 1;
            if ($obj->update($textbook_table, $update_textbook_params, $where)) {

                $where = "tb_id=" . $tb_id . " AND " . "status!=0 ORDER BY books.bid DESC";
                for ($i = 1; $i <= $quantity; $i++) {
                    if ($obj->delete($books_table, $where, $limit)) {
                        $_SESSION['message'] = "TextBook Details Updated Successfully.";
                    } else {
                        $_SESSION['messages'] = "TextBook Details Updated Successfully.";
                        header("Location:display_textbook.php");
                    }
                }
                header("Location:display_textbook.php");
            } else {
                echo "Hello";
            }
        } elseif ($pres_quantity == 0) {
            $quantity = $prev_quantity - $pres_quantity;

            $info = false;
            $j = 0;
            $select = "count(*)";
            $where = "tb_id=" . $tb_id . " AND " . "status=0 ";
            $obj->select($books_table, $select, null, $where);
            $result = $obj->getResults();
            if ($result == null) {
                $info = false;
            } else {
                $info = true;
                $j = $result[0]['count(*)'];
            }

            if ($info == false) {
                $now = 0;
                $update_textbook_params = ['textbook' => $text_book, 'sub_id' => $sid,  'pid' => $pub_id, 'quantity' => $now, 'price' => $price];
                $where_t = "tb_id = {$tb_id}";
                if ($obj->update($textbook_table, $update_textbook_params, $where_t)) {
                    $limit = 1;
                    $where = "tb_id=" . $tb_id . " AND " . "status!=0 ORDER BY books.bid DESC";
                    for ($i = 1; $i <= $quantity; $i++) {
                        if ($obj->delete($books_table, $where, $limit)) {
                            $_SESSION['message'] = "TextBook Details Updated Successfully.";
                        }
                    }
                    $_SESSION['message'] = "TextBook Details Updated Successfully.";
                    header("Location:display_textbook.php");
                }
            } elseif ($info == true) {
                $now = $j;
                $update_textbook_params = ['textbook' => $text_book, 'sub_id' => $sid, 'pid' => $pub_id, 'quantity' => $now, 'price' => $price];
                $where_t = "tb_id = {$tb_id}";
                if ($obj->update($textbook_table, $update_textbook_params, $where_t)) {
                    $limit = 1;
                    $where = "tb_id=" . $tb_id . " AND " . "status!=0 ORDER BY books.bid DESC";
                    for ($i = 1; $i <= $quantity; $i++) {
                        if ($obj->delete($books_table, $where,$limit)) {
                            $_SESSION['message'] = "TextBook Details Updated Successfully with keeping the issued textbook as constant.";
                        }
                    }
                    $_SESSION['message'] = "TextBook Details Updated Successfully with keeping the issued textbook as constant.";

                    header("Location:display_textbook.php");
                }
            }
        } else {
            $update_textbook_params = ['textbook' => $text_book, 'sub_id' => $sid,  'pid' => $pub_id, 'quantity' => $pres_quantity, 'price' => $price];
            if ($obj->update($textbook_table, $update_textbook_params, $where)) {
                $_SESSION['message'] = "TextBook Details Updated Successfully.";
                header("Location:display_textbook.php");
            } else {

                header("Location:display_textbook.php");
            }
        }
    } elseif (count($present_aid) == count($previous_aid)) {
        $diff = array_diff($present_aid, $previous_aid);

        if (count($diff) != null) {
            foreach ($diff as $aids) {
                $aut_book_params = ['tb_id' => $tb_id, 'aid' => $aids];
                $obj->insert($t_author, $aut_book_params);
            }
            $where = "tb_id={$tb_id}";
            $obj->select($t_author, '*', null, $where);
            $result = $obj->getResults();
            $table_authors = array();
            foreach ($result as $data) {
                $table_authors[] = $data['aid'];
            }

            $re_data = array_diff($table_authors, $present_aid);
            if (count($re_data) != 0) {
                foreach ($re_data as $data) {
                    $where = "tb_id = {$tb_id} AND aid = {$data}";
                    $obj->delete($t_author, $where);
                }
            }
        } else {
        }
        if ($pres_quantity > $prev_quantity) {
            $quantity = $pres_quantity - $prev_quantity;

            $add = $prev_quantity;
            $j = 1;
            $a = 0;
            $inf = false;
            for ($i = 1; $i <= $quantity; $i++) {
                finale:
                $bn = $sid . "-" . $tb_id . "-" . $add + $j;
                $where_b = "bn='{$bn}'";
                $obj->select($books_table, '*', null, $where_b);
                $result = $obj->getResults();
                if ($result == null) {
                    $books_param = ['tb_id' => $tb_id, 'bn' => $bn];
                    if ($obj->insert($books_table, $books_param)) {
                        echo "good";
                        $j++;
                    }
                } else {
                    $j++;
                    $a++;
                    $inf = true;
                    goto finale;
                }
                if ($inf == true) {
                    $now = $pres_quantity + $a;
                    $update_textbook_params = ['textbook' => $text_book, 'sub_id' => $sid, 'pid' => $pub_id, 'quantity' => $now, 'price' => $price];
                    if ($obj->update($textbook_table, $update_textbook_params, $where)) {
                        $_SESSION['message'] = "Some textbook were on issue so keeping their quantity constant   the textbook were added.";
                        header("Location:display_textbook.php");
                    }
                } else {
                    $now = $pres_quantity;
                    $update_textbook_params = ['textbook' => $text_book, 'sub_id' => $sid,  'pid' => $pub_id, 'quantity' => $now, 'price' => $price];
                    if ($obj->update($textbook_table, $update_textbook_params, $where)) {
                        $_SESSION['message'] = "TextBook Details Updated Successfully.";
                        header("Location:display_textbook.php");
                    }
                }
            }
        } elseif (($prev_quantity > $pres_quantity) && ($pres_quantity != 0)) {
            $quantity = $prev_quantity - $pres_quantity;
            $now = $pres_quantity;
            $update_textbook_params = ['textbook' => $text_book, 'sub_id' => $sid,  'pid' => $pub_id, 'quantity' => $now, 'price' => $price];
            $limit = 1;
            if ($obj->update($textbook_table, $update_textbook_params, $where)) {

                $where = "tb_id=" . $tb_id . " AND " . "status!=0 ORDER BY books.bid DESC";
                for ($i = 1; $i <= $quantity; $i++) {
                    if ($obj->delete($books_table, $where, $limit)) {
                        $_SESSION['message'] = "TextBook Details Updated Successfully.";
                    } else {
                        $_SESSION['messages'] = "TextBook Details Updated Successfully.";
                        header("Location:display_textbook.php");
                    }
                }
                header("Location:display_textbook.php");
            } else {
                echo "Hello";
            }
        } elseif ($pres_quantity == 0) {
            $quantity = $prev_quantity - $pres_quantity;

            $info = false;
            $j = 0;
            $select = "count(*)";
            $where = "tb_id=" . $tb_id . " AND " . "status=0 ";
            $obj->select($books_table, $select, null, $where);
            $result = $obj->getResults();
            if ($result == null) {
                $info = false;
            } else {
                $info = true;
                $j = $result[0]['count(*)'];
            }

            if ($info == false) {
                $now = 0;
                $update_textbook_params = ['textbook' => $text_book, 'sub_id' => $sid,  'pid' => $pub_id, 'quantity' => $now, 'price' => $price];
                $where_t = "tb_id = {$tb_id}";
                if ($obj->update($textbook_table, $update_textbook_params, $where_t)) {
                    $limit = 1;
                    $where = "tb_id=" . $tb_id . " AND " . "status!=0 ORDER BY books.bid DESC";
                    for ($i = 1; $i <= $quantity; $i++) {
                        if ($obj->delete($books_table, $where, $limit)) {
                            $_SESSION['message'] = "TextBook Details Updated Successfully.";
                        }
                    }
                    $_SESSION['message'] = "TextBook Details Updated Successfully.";
                    header("Location:display_textbook.php");
                }
            } elseif ($info == true) {
                $now = $j;
                $update_textbook_params = ['textbook' => $text_book, 'sub_id' => $sid, 'pid' => $pub_id, 'quantity' => $now, 'price' => $price];
                $where_t = "tb_id = {$tb_id}";
                if ($obj->update($textbook_table, $update_textbook_params, $where_t)) {
                    $limit = 1;
                    $where = "tb_id=" . $tb_id . " AND " . "status!=0 ORDER BY books.bid DESC";
                    for ($i = 1; $i <= $quantity; $i++) {
                        if ($obj->delete($books_table, $where, $limit)) {
                            $_SESSION['message'] = "TextBook Details Updated Successfully with keeping the issued textbook as constant.";
                        }
                    }
                    $_SESSION['message'] = "TextBook Details Updated Successfully with keeping the issued textbook as constant.";

                    header("Location:display_textbook.php");
                }
            }
        } else {
            $update_textbook_params = ['textbook' => $text_book, 'sub_id' => $sid,  'pid' => $pub_id, 'quantity' => $pres_quantity, 'price' => $price];
            $where = "tb_id = {$tb_id}";

            if ($obj->update($textbook_table, $update_textbook_params, $where)) {
                $_SESSION['message'] = "TextBook Details Updated Successfully.";
                header("Location:display_textbook.php");
            } else {

                header("Location:display_textbook.php");
            }
        }
    }
}