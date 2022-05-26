<!DOCTYPE html>
<html lang="">
<head>
<title>FOODBUDDY</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="layout/styles/custom-styles.css" rel="stylesheet" type="text/css" media="all">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body id="top">
<?php 
  // Start the session
  session_start();
  $img_url = 'images/demo/ff.jpg';
  if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) // index page...
  {
      $img_url = 'images/demo/backgrounds/coverbackground.jpg';
  }
  
?>
<div class="bgded overlay" style="background-image:url(<?php echo $img_url; ?>);background-size: 100% 100%;"> 
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <div class="fl_left">  
      </div>
      
    </div>
  </div>
 
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left" style="width: 450px;">
        <h1><img src="images/demo/logo.jpeg" style="width: 11%;border-radius: 80%;">&nbsp;&nbsp; Foodbuddy</h1>
      </div>
      <nav id="mainav" class="fl_right"> 
        <ul class="clear">
          <li class=""><a href="index.php">Home</a></li>
          <li><a href="gallery.php">Our Gallery</a></li>
           <li><a class="drop" href="#">Know More</a>
                  <ul>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="chatbot.php" target="_blank">Chat With Us</a></li>
                  </ul>
                </li>
              <?php
                if(!isset($_SESSION['logged_in'])){
              ?>
                <li><a class="drop" href="#">Login / Sign Up</a>
                  <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a class="drop" href="#">Sign UP</a>
                      <ul>
                        <li><a href="agentsignup.php">Agent</a></li>
                        <li><a href="donorsignup.php">Donor</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              <?php
              }
              ?>
          <?php
            if(isset($_SESSION['logged_in'])&&($_SESSION['logged_in']==1)){
          ?>
          <li><a href="profile.php">My Account</a></li>
          <li><a href="logout.php">Logout</a></li>
          <?php
          }
        
          ?>
         <li><a href="collecteddonations.php">Collected Donations</a>
          </li>
        </ul>
      </nav>
    </header>
  </div>