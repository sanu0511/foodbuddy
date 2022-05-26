<?php
include 'common_mailer.php';
include 'common_functions.php';
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodbuddy_db";

//print_r($_FILES);
//die();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$user_id = $_SESSION['user_id'];
$title = $_POST['post_title'];
$description = $_POST['description'];
$address = $_POST['address'];
$landmark = $_POST['landmark'];
$pincode = $_POST['pincode'];
$head_count = $_POST['head_count'];

$sql = "INSERT INTO `food_post`( `user_id`,`post_title`, `post_description`, `post_address`, `post_landmark`, `post_pincode`, `head_count`) VALUES ('$user_id','$title','$description','$address','$landmark','$pincode','$head_count')";
if (mysqli_query($conn, $sql)) {
	$post_id = mysqli_insert_id($conn);
	// Configure upload directory and allowed file types
    $upload_dir = 'uploads/';
    $allowed_types = array('jpg', 'png', 'jpeg', 'gif');
     
    // Define maxsize for files i.e 2MB
    $maxsize = 15 * 1024 * 1024;
 
    // Checks if user sent an empty form
    if(!empty(array_filter($_FILES['image_post']['name']))) {
 
        // Loop through each file in files[] array
        foreach ($_FILES['image_post']['tmp_name'] as $key => $value) {
             
            $file_tmpname = $_FILES['image_post']['tmp_name'][$key];
            $file_name = $_FILES['image_post']['name'][$key];
            $file_size = $_FILES['image_post']['size'][$key];
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
 
            // Set upload file path
            $filepath = $upload_dir.$file_name;
 
            // Check file type is allowed or not
            if(in_array(strtolower($file_ext), $allowed_types)) {
 
                // Verify file size - 2MB max
                if ($file_size > $maxsize)        
                    echo "Error: File size is larger than the allowed limit.";
 
                // If file with name already exist then append time in
                // front of name of the file to avoid overwriting of file
                if(file_exists($filepath)) {
                    $filepath = $upload_dir.time().$file_name;
                     
                    if( move_uploaded_file($file_tmpname, $filepath)) {
                        // echo "{$file_name} successfully uploaded <br />";
                        $sql_image = "INSERT INTO `post_images`( `image_path`,`post_id`) VALUES ('$filepath','$post_id')";
                        $image_query = mysqli_query($conn, $sql_image);
                    }
                    else {                    
                        echo "Error uploading {$file_name} <br />";
                    }
                }
                else {
                 
                    if( move_uploaded_file($file_tmpname, $filepath)) {
                        // echo "{$file_name} successfully uploaded <br />";
                        $sql_image = "INSERT INTO `post_images`( `image_path`,`post_id`) VALUES ('$filepath','$post_id')";
                        $image_query = mysqli_query($conn, $sql_image);
                    }
                    else {                    
                        echo "Error uploading {$file_name} <br />";
                    }
                }
            }
            else {
                 
                // If file extension not valid
                echo "Error uploading {$file_name} ";
                echo "({$file_ext} file type is not allowed)<br / >";
            }
        }
    }
    else {
         
        // If no files selected
        echo "No files selected.";
    }


    /**
     *
     * Email setup
     *
     */
    //User fullname
    $user_data = get_user_by_id($user_id);
    // Sender info 
    $mail->setFrom('projectinfowork@gmail.com', 'Foodbuddy');
    // Add a recipient 
    $mail->addAddress('projectinfowork@gmail.com', 'Foodbuddy'); 
    // Email subject 
    $mail->Subject = 'New Post Alert'; 
     
    // Set email format to HTML 
    $mail->isHTML(true); 
     
    // Email body content 
    $mailContent = ' 
        <h2>New Post added by '.$user_data['first_name'].' '.$user_data['last_name'].' </h2> 
        <p>Address: '.$address.'</p> 
        <p>Landmark: '.$landmark.'</p>
        <p>Pincode: '.$pincode.'</p>
        <p>Head Count: '.$head_count.'</p>
        <h3>To notify agent please approve the post<h3>'; 
    $mail->Body = $mailContent; 
     
    // Send email 
    $mail->send();
	echo "<script>alert('You have posted successfully please wait till it gets approved');</script>";
	echo "<script>window.location.href='index.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>