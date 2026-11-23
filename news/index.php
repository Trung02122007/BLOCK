<?php
require_once("initiation.php");
include_once("controller/controller.php");
$home = new controller;

$action = $_GET['action'] ?? '';

switch($action){
    default:
        $home -> index();
        break;
    case "view_post":
        $home -> view_post_by_id();
        break;
    case "view_login":
        $home -> view_login();
        break;
    case "run_login":
        controller::run_login();
        break;
    case "run_logout":
        $home -> run_logout();
        break;
}

?>