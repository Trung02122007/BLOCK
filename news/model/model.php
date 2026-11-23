<?php
include_once("model/pdo.php");

class model_list
{
    public static function get_all_from_db()
    {
        $sql = "SELECT posts.*,
            categories.id AS category_id,
            categories.category_name
            FROM posts
            INNER JOIN categories
            ON posts.category_id = categories.id";
        return pdo_query($sql);
    }

    public static function get_one_post_by_id($view_id)
    {
        $sql = "SELECT posts.*,
            categories.id AS category_id,
            categories.category_name,
            users.id AS user_id,
            users.username, users.display_name
            FROM posts
            INNER JOIN categories
            ON posts.category_id = categories.id
            INNER JOIN users
            ON posts.author_id = users.id
            WHERE posts.id = $view_id";
        return pdo_query_one($sql);
    }

    public static function get_latest($limit)
    {
        $limit = max(0, (int)$limit);
        $sql = "SELECT posts.*,
            categories.id AS category_id,
            categories.category_name
            FROM posts
            INNER JOIN categories
            ON posts.category_id = categories.id
            WHERE post_status = 'published'
            ORDER BY published_at DESC
            LIMIT $limit";
        return pdo_query($sql);
    }

    public static function get_latest_filtered($limit, $display_category_id = null)
    {
        $limit = max(0, (int)$limit);
        $sql = "SELECT posts.*,
            categories.id AS category_id,
            categories.category_name
            FROM posts
            INNER JOIN categories
            ON posts.category_id = categories.id
            WHERE post_status = 'published'";
        if ($display_category_id !== null) {
            $category_id = (int)$display_category_id;
            $sql .= " AND posts.category_id = $category_id";
        }
        $sql .= " ORDER BY published_at DESC
            LIMIT $limit";
        return pdo_query($sql);
    }

    public static function login_request($username_or_email){
        $sql = "SELECT * from users WHERE username = ? OR email = ?";
        return pdo_query_one($sql, $username_or_email, $username_or_email);
    }
}
