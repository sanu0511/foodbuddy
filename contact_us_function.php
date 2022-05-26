<?php
include 'common_mailer.php';
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
$name = $_POST['name'];
$email = $_POST['email'];
$contact_no = $_POST['contact_no'];
$sql = "INSERT INTO `contact_us`( `name`,`email`,`contact_no`) VALUES ('$name','$email','$contact_no')";
if (mysqli_query($conn, $sql)) {
  	$mail->setFrom('projectinfowork@gmail.com', 'SenderName');
    // Add a recipient 
    $mail->addAddress('projectinfowork@gmail.com', 'Foodbuddy'); 
    // Email subject 
    $mail->Subject = 'Contact Alert'; 
     
    // Set email format to HTML 
    $mail->isHTML(true); 
     
    // Email body content 
    $mailContent = ' 
        <p>Name: '.$name.'</p>
        <p>Email: '.$email.'</p>
        <p>Contact Number: '.$contact_no.'</p>
        <h3>This is an auto generated email. Please do not reply<h3>'; 
    $mail->Body = $mailContent; 
     
    // Send email 
    $mail->send();
  echo "<script>alert('Your details have been shared successfully');</script>";
  echo "<script>window.history.back();</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>