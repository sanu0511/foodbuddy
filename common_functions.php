<?php
    function get_user_by_id($user_id){
        include 'db_connection.php';
        $sql_query = "SELECT * FROM `foodbuddy_users` where `id`='$user_id'";
        $result = mysqli_query($conn, $sql_query);
        $user_data = mysqli_fetch_assoc($result);
        return $user_data;
    }
    function get_post_by_id($post_id){
        include 'db_connection.php';
        $sql_query = "SELECT * FROM `food_post` where `id`='$post_id'";
        $result = mysqli_query($conn, $sql_query);
        $post_data = mysqli_fetch_assoc($result);
        return $post_data;
    }
?>