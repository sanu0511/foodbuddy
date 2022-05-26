<?php
 
// Include PHPMailer library files 
require 'PHPMailer-master/src/Exception.php'; 
require 'PHPMailer-master/src/PHPMailer.php'; 
require 'PHPMailer-master/src/SMTP.php'; 
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;

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