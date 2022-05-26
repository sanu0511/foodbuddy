<?php
include 'header.php';
?>
<style>

.button1{
  background-color: #ddd;
  border: none;
  color: black;
   padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 15px 12px;
  cursor: pointer;
  border-radius: 26px;
  font-size: 25px;

}

.button1:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2><u>Sign Up As</u></h2>

<p align="center"><button class="button1"><a style="text-decoration: none; color:inherit;" href="donorsignup.php">DONOR</a></button></p>
<p align="center"><button class="button1"><a style="text-decoration: none; color:inherit;" href="agentsignup.php">AGENT</a></button></p>

<?php
include 'footer.php';
?>