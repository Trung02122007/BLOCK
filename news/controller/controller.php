<?php
include_once("model/model.php");
include_once("model/category_model.php");
include_once("model/user_model.php");
class controller{
    public static function index(){
        $posts_db = model_list::get_all_from_db();
        $categories_db = category_model::get_all_from_db();    
        $latest = model_list::get_latest(3);

        $entertainment_posts = model_list::get_latest_filtered(5, 1);
        $health_posts = model_list::get_latest_filtered(5, 2);
        $social_posts = model_list::get_latest_filtered(5, 3);
        
        include_once("view/home.php");
    }

    public static function view_post_by_id(){
        $view_id = $_GET['id'];
        $view_post = model_list::get_one_post_by_id($view_id);
        include_once("view/post_view.php");
    }

    public static function view_login(){
        include_once("view/login.php");
    }

    public static function run_login(){
        header('Content-Type: application/json');
        $username_or_email = trim($_POST['username_or_email']);
        $password = $_POST['password'];

        $user = model_list::login_request($username_or_email);
        if($user && password_verify($password, $user['password'])){
            session_regenerate_id(true);
            $_SESSION['user'] = [
                'id' => $user['id'],
                'username' => $user['username'],
                'display_name' => $user['display_name'],
                'profile_picture' => $user['profile_picture'],
                'role' => $user['role']
            ];

            echo json_encode([
                'success' => true
            ]);

            exit;
        }else{
            echo json_encode([
                'success' => false,
                'message' => 'Incorrect username/email or password.'
            ]);
            exit;
        }
    }

    public static function run_logout(){
        $_SESSION = [];
        session_unset();
        header('Location: index.php');
        exit;
    }
}
?>