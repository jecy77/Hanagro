<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include('connect.php');

function get_board_list($cate){
    global $pdo;
    if($cate){ $q = "select * from board where cate=:cate order by id desc";
    }else{ $q = "select * from board order by id desc"; }
    $stmt = $pdo->prepare($q);
    if($cate){ $stmt->bindValue(':cate', $cate);}
    $stmt->execute();
//    $result[0] = $stmt->fetchAll();
//    $result[1] = $q;
//    $result[2] = $cate;
    $result = $stmt->fetchAll();
    return $result;
}



function get_sub_menu_title_and_return_korean_text($get,$menu_array){
    $sub_menu_title = "";
    foreach ($menu_array as $sub_menu_array) {
        if($get==$sub_menu_array[1]) {
            $sub_menu_title = $sub_menu_array[0];
        }
    }
    return $sub_menu_title;
}

function get_product_list(){
    global $pdo;
    $q = "select * from product";
    $stmt = $pdo->prepare($q);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}