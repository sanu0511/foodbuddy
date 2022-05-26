<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "foodbuddy_db";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $organisation = $_POST['org'];
    $address = $_POST['address'];
    $landmark = $_POST['landmark'];
    $pincode = $_POST['pincode'];
    $user_id = $_POST['user_id'];
    $contact_no = $_POST['contact'];
    $sql = "UPDATE `foodbuddy_users` SET `first_name` = '$first_name', `last_name` = '$last_name',`email` = '$email', `organisation` = '$organisation',`address` = '$address',`landmark` = '$landmark', `pincode` = '$pincode', `contact_number` = '$contact_no'
                      WHERE `id` = '$user_id'";
    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Your profile details have been updated successfully');</script>";
      echo "<script>window.history.back();</script>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>