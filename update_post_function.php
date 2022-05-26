<?php
include('db_connection.php');
include 'common_functions.php';
// include 'common_mailer.php';
// Include PHPMailer library files 
require 'PHPMailer-master/src/Exception.php'; 
require 'PHPMailer-master/src/PHPMailer.php'; 
require 'PHPMailer-master/src/SMTP.php'; 
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;

$post_id = $_POST['post_id'];
$trigger = $_POST['trigger'];
if($trigger == 'update')
{
    $sql = "UPDATE `food_post` SET `status` = 1 WHERE `id` = '$post_id'";
    if (mysqli_query($conn, $sql)) {
    /**
     *
     * Email setup
     *
     */
    //Post data
    $post_data = get_post_by_id($post_id);
    $user_id = $post_data['user_id'];
    //User fullname
    $user_data = get_user_by_id($user_id);
    $donor_email = $user_data['email'];
    $donor_name = $user_data['first_name'].' '.$user_data['last_name'];
    $send_donor_flag = 0;
    if($send_donor_flag == 0)
    {
        /**
         *
         * Email setup
         *
         */
         // Create an instance of PHPMailer class 
         $mail = new PHPMailer;
         // SMTP configuration
         $mail->isSMTP();
         $mail->Host     = 'smtp.gmail.com';
         $mail->SMTPAuth = true;
         $mail->Username = 'projectinfowork@gmail.com';
         $mail->Password = 'project@123';
         $mail->SMTPSecure = 'ssl';
         $mail->Port     = 465;
        // Sender info 
        $mail->setFrom('projectinfowork@gmail.com', 'FoodBuddy');
        // Add a recipient 
        $mail->addAddress($donor_email,$donor_name); 
        // Email subject 
        $mail->Subject = 'Post Approval Alert'; 
         
        // Set email format to HTML 
        $mail->isHTML(true); 
         
        // Email body content 
        $mailContent = ' 
            <p>Your request for donation has been approved by FoodBuddycommunity. Our Agents will contact you shortly.</p>
            <h3>FoodBuddycommunity really appreciate you for your donation.<h3>'; 
        $mail->Body = $mailContent; 
         
        // Send email 
        $mail->send();
        $send_donor_flag = 1;
    }

    /**
     * Agent mailer
     */
    /**
     *
     * Email setup
     *
     */
    if($send_donor_flag==1)
    {
            /**
             *
             * Email setup
             *
             */
             // Create an instance of PHPMailer class 
             $mail = new PHPMailer;
             // SMTP configuration
             $mail->isSMTP();
             $mail->Host     = 'smtp.gmail.com';
             $mail->SMTPAuth = true;
             $mail->Username = 'projectinfowork@gmail.com';
             $mail->Password = 'project@123';
             $mail->SMTPSecure = 'ssl';
             $mail->Port     = 465;
        // Sender info 
        $mail->setFrom('projectinfowork@gmail.com', 'FoodBuddy');
        $agent_sql = "SELECT * FROM `foodbuddy_users` WHERE `user_type`='agent'";
        $result_agent = mysqli_query($conn, $agent_sql);
        while($row_agent = mysqli_fetch_assoc($result_agent)) {
            // Add a recipient 
            $agent_name = $row_agent['first_name'].' '.$row_agent['last_name'];
            $mail->addAddress($row_agent['email'],$agent_name);
        } 
        // Email subject 
        $mail->Subject = 'New Post Alert'; 
         
        // Set email format to HTML 
        $mail->isHTML(true); 
         
        // Email body content 
        $mailContent_agent = ' 
            <h2>New Donation Alert.</p>
            <p>Address: '.$post_data['post_address'].'</p>
            <p>Landmark: '.$post_data['post_landmark'].'</p>
            <p>Pincode: '.$post_data['post_pincode'].'</p>
            <p>Head Count: '.$post_data['head_count'].'</p>
            <h3>It is an auto generated mail. Please do not reply.<h3>'; 
        $mail->Body = $mailContent_agent; 
         
        // Send email 
        $mail->send();
    }

        echo "<script>alert('The post has been approved successfully');</script>";
        echo "<script>window.history.back();</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}elseif($trigger == 'delete')
{
    $sql = "DELETE FROM `food_post` WHERE `id` = '$post_id'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('The post has been deleted successfully');</script>";
        echo "<script>window.history.back();</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}elseif($trigger == 'collect_by_agent')
{
    $agent_id = $_POST['agent_id'];
    $sql = "UPDATE `food_post` SET `collected_agent_id` = '$agent_id' WHERE `id` = '$post_id'";
    if (mysqli_query($conn, $sql)) {
    //Post data
    $post_data = get_post_by_id($post_id);
    $agent_data = get_user_by_id($agent_id);
    $donor_data = get_user_by_id($post_data['user_id']);
    $donor_email = $donor_data['email'];
    $donor_name = $donor_data['first_name'].' '.$donor_data['last_name'];
    /**
     *
     * Email setup
     *
     */
     // Create an instance of PHPMailer class 
     $mail = new PHPMailer;
     // SMTP configuration
     $mail->isSMTP();
     $mail->Host     = 'smtp.gmail.com';
     $mail->SMTPAuth = true;
     $mail->Username = 'projectinfowork@gmail.com';
     $mail->Password = 'project@123';
     $mail->SMTPSecure = 'ssl';
     $mail->Port     = 465;
    // Sender info 
    $mail->setFrom('projectinfowork@gmail.com', 'FoodBuddy');
    // Add a recipient 
    $mail->addAddress($donor_email,$donor_name); 
    // Email subject 
    $mail->Subject = 'Agent accepted Your Post'; 
     
    // Set email format to HTML 
    $mail->isHTML(true); 
     
    // Email body content 
    $mailContent = ' 
        <p>Your post has been accepted by agent.</p>
        <p>Thank you.</p>
        <p>Agent Name - '.$agent_data['organisation'].'</p>
        <p>Agent Name - '.$agent_data['contact_number'].'</p>
        <h3>This is an auto generated email. Plese do not reply<h3>'; 
    $mail->Body = $mailContent; 
     
    // Send email 
    $mail->send();
        echo "<script>alert('Donor has been notified with your details');</script>";
        echo "<script>window.history.back();</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>