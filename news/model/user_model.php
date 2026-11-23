<?php
include_once('model/pdo.php');
class user_model{
    public static function get_all_from_db(){
        $sql = "SELECT * FROM users";
        return pdo_query($sql);
    }
}
?>