<?php
    include('db_connection.php');
    $login_email = $_POST['email'];
    $login_password = $_POST['password'];
    $sql_query = "SELECT * FROM `foodbuddy_users` where `email` = '$login_email' AND `password`='$login_password'";
    if ($result = mysqli_query($conn, $sql_query)) {
        $rowcount=mysqli_num_rows($result);
        if($rowcount>0){
            $login_row = mysqli_fetch_row($result);
            session_start();
            $_SESSION["logged_in"] = 1;
            $_SESSION["user_id"] =  $login_row[0];
            $_SESSION["username"] = $login_row[3];
            $_SESSION["first_name"] = $login_row[1];
            $_SESSION["last_name"] = $login_row[2];
            $_SESSION["user_type"] = $login_row[7];
            // print_r($_SESSION);
            // die;
            // session_write_close();
            $url = "profile.php";
            header("Location: $url");
        }
        else{
            echo "<script>alert('Invalid Email or Password');</script>";
            echo "<script>window.history.back();</script>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>