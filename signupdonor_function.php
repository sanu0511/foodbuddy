<?php
    include('db_connection.php');
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $id_proof = $_POST['id_proof'];
    $id_proof_number = $_POST['id_proof_number'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $landmark = $_POST['landmark'];
    $pincode = $_POST['pincode'];
    $user_type = "donor";
    $contact_no = $_POST['contact'];
    $sql = "INSERT INTO `foodbuddy_users`( `first_name`,`last_name`,`email`,`id_proof`,`id_number`,`password`,`user_type`,`address`,`landmark`,`pincode`,`contact_number`) VALUES ('$first_name','$last_name','$email','$id_proof','$id_proof_number','$password','$user_type','$address','$landmark','$pincode','$contact_no')";
    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Your details have been recorded successfully');</script>";
      echo "<script>window.history.back();</script>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>