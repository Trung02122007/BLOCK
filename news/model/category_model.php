<?php
include_once("model/pdo.php");

class category_model{
    public static function get_all_from_db(){
        $sql = "select * from categories";
        return pdo_query($sql);
    }
}
?>