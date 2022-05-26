<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'header.php';
?>
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}


/* Form wrapper */
.item {
    display: block;
    width: 100%;
}
label {
    display: inline;
}
input[type=checkbox] {
    display: inline;
}
.btn-submit{
        text-align: center;
    }
/* End of Form wrapper */


</style>
<?php
include 'sidebar.php';
?>
<div class="content">
    <h2>Welcome <?php echo $_SESSION['first_name'].' '.$_SESSION['last_name']."!"; ?></h2>
    <h2> Role - <?php echo $_SESSION['user_type']; ?></h2>
</div>
<?php
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "foodbuddy_db";
    $user_id = $_SESSION['user_id'];
    // Create connection
    // $conn = mysqli_connect($servername, $username, $password, $dbname);
    // // Check connection
    // if (!$conn) {
    //   die("Connection failed: " . mysqli_connect_error());
    // }
    include('db_connection.php');
    $sql_query = "SELECT * FROM `foodbuddy_users` where `id` = '$user_id'";
    $profile_data = [];
    if ($result = mysqli_query($conn, $sql_query)) {
        $profile_data = mysqli_fetch_row($result);
    }
    // print_r($profile_data);
?>


<div class="wrapper_post">
  <div id="wizard_signup_agent">
    <form action="updateprofile_function.php" method="post">
      <div class="input-group">
        <label for="first_name">First Name:</label>
        <input type="text" class="form-control" name="first_name" placeholder="First Name" value="<?php echo $profile_data[1]; ?>" required="required">
      </div>
      <input type="hidden"  name="user_id" value="<?php echo $user_id; ?>"/>

      <br>
      <div class="input-group">
        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?php echo $profile_data[2]; ?>" required="required">
      </div>
      <br>
      <div class="input-group">
        <label for="email">Email:</label>
        <input type="email" style =" " class="form-control" name="email" placeholder="Email" value="<?php echo $profile_data[3]; ?>" required="required">
      </div>
      <br>
      <?php
      if($_SESSION['user_type'] == 'agent')
      {
        ?>
        <div class="input-group">
        <label for="organisation">Organisation Name:</label>
        <input style =" " class="form-control" type="text"  name="org" placeholder="Organisation Name" value="<?php echo $profile_data[6]; ?>" required="required">
      </div>  
        <?php
      }

      ?>
      <br>   
      <div class="input-group">
        <label for="Address">Address:</label>
        <textarea class="form-control" rows="5" id="address" name="address" placeholder="Enter Address" required="required"><?php echo $profile_data[9]; ?></textarea>
      </div>
      <br>
      <div class="input-group">
        <label for="landmark">Landmark:</label>
        <input style =" " class="form-control" type="landmark"  id="landmark" placeholder="Enter landmark" name="landmark" value="<?php echo $profile_data[10]; ?>" required="required">
      </div>
      <br>
      <div class="input-group">
        <label for="pincode">Pincode:</label>
        <input style =" " class="form-control" type="text" id="pincode" placeholder="Enter pincode" name="pincode" value="<?php echo $profile_data[11]; ?>" required="required">
      </div>
      <br>
      <div class="input-group">
        <label for="contact">Mobile Number:</label>
        <input style =" " class="form-control" type="contact"  name="contact" placeholder="Mobile Number" value="<?php echo $profile_data[12]; ?>" required="required">
      </div>
      <br>      
      <div class="btn-submit">
        <button type="submit"  class="btn btn-success btn-lg btn-block">Update</button>
      </div>
    </form>
  </div>
</div>
<?php
include 'footer.php';
?>