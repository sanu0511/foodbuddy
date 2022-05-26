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

/* End of Form wrapper */


</style>
<div class="content">
  <div class="wrapper row3" style="background-image: url('images/demo/Pending.jpg');">
<?php
include 'sidebar.php';
include 'db_connection.php';
include 'common_functions.php';
?>

    <section class="hoc container clear"> 
      <div class="sectiontitle">
        <p class="heading underline font-x2" style="margin-left: 26%;">Approval Table</p>
      </div>
      <table class="table table-striped table-dark" style="width: 90%; margin-left: 15%;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Donor Name</th>
      <th scope="col">Donation Date</th>
      <th scope="col">Status</th>
      <th scope="col">View Post</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $sql_query = "SELECT * FROM `food_post`";
    $result = mysqli_query($conn, $sql_query);
    $rowcount=mysqli_num_rows($result);
    if($rowcount>0){
      $i=0;
      while($row = mysqli_fetch_assoc($result)) {
        $i++;
        $post_id = $row['id'];
        $user_id = $row['user_id'];
        $status = ($row['status']==1)?"Approved":"Pending";
        $style = ($row['status']==1)?"color:green;":"color:red;";
        $user_data = get_user_by_id($user_id);
        ?>
        <tr>
          <th scope="row"><?php echo $i; ?></th>
          <td><?php echo $user_data['first_name']." ".$user_data['last_name']; ?></td>
          <td><?php echo $row['created_at']; ?></td>
          <td style="<?php echo $style; ?>"><?php echo $status; ?></td>
          <td><a href="#view_post_modal<?php echo $post_id; ?>" rel="modal:open">View Post</a></td>
          <td>
            <?php
              if($row['status']==0)
              {
            ?>
            <div class="row">
              <div class="col-md-3">
              <form action="update_post_function.php" method="post">
              <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
              <input type="hidden" name="trigger" value="update">
              <button type="submit" class="btn btn-success"><i class="fas fa-check"></i></button>
            </form>
            </div>
            <?php
              }
            ?>
            <div class="col-md-3">
            <form action="update_post_function.php" method="post">
              <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
              <input type="hidden" name="trigger" value="delete">
              <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </form>
          </div>
            </div>
          </td>
        </tr>
        <div id="view_post_modal<?php echo $post_id; ?>" class="modal">
            <p><b>Name:</b><?php echo $user_data['first_name']." ".$user_data['last_name']; ?></p>
            <p><b>Landmark:</b>&nbsp;<?php echo $user_data['landmark']; ?></p>
            <p><b>Mobile:</b>&nbsp;<?php echo $user_data['contact_number']; ?></p>
            <p><b>Food Description:</b>&nbsp;<?php echo $row['post_description']; ?></p>
            <p><b>Address:</b>&nbsp;<?php echo $row['post_address']; ?></p>
            <p><b>Photos:</b></p>
            <?php
              $sql_query_image = "SELECT * FROM `post_images` WHERE `post_id`='$post_id'";
              $result_images = mysqli_query($conn, $sql_query_image);
              while($row_post_image = mysqli_fetch_assoc($result_images))
              { ?>
                <a href="<?php echo $row_post_image['image_path']; ?>" target="_blank"><img id="myImg" src="<?php echo $row_post_image['image_path']; ?>" alt="Snow" style="width:30%;max-width:50%"></a>
            <?php
              }
            ?>              
            <p><a href="javascript:void(0);" class="btn btn-danger" rel="modal:close" style="display: inline-block; margin-top: 2%">Close</a></p>
        </div>
        <?php
      }
    }
    ?>
    
  </tbody>
</table>
    </section>
  </div>
</div>
<?php
include 'footer.php';
?>