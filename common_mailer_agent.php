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
 $mail_agent = new PHPMailer;
 // SMTP configuration
 $mail_agent->isSMTP();
 $mail_agent->Host     = 'smtp.gmail.com';
 $mail_agent->SMTPAuth = true;
 $mail_agent->Username = 'projectinfowork@gmail.com';
 $mail_agent->Password = 'project@123';
 $mail_agent->SMTPSecure = 'ssl';
 $mail_agent->Port     = 465;