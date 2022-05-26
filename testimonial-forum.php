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
        <p class="heading underline font-x2" style="margin-left: 26%;">Testimonials Table</p>
        
      </div>
        <div id="add_testimonial_modal" class="modal">
            <form action="update_testimonial_function.php" method="POST">
                <input type="hidden" name="trigger" value="create_testimonial">
                <div class="md-form mb-5">
          <i class="prefix grey-text"></i>
          <input type="text" name="name" placeholder="Name" id="form34" class="form-control validate" style="width: 73%;">
          <label data-error="wrong" data-success="right" for="form34"></label>
        </div>
                <div class="md-form mb-5">
          <i class="prefix grey-text"></i>
          <input type="text" name="designation" placeholder="Designation" id="form29" class="form-control validate" style="width: 73%; margin-top: 2%;">
          <label data-error="wrong" data-success="right" for="form29"></label>
        </div>
        <textarea name="quote" placeholder="Quote" id="form29" class="form-control validate" style="width: 73%;margin-top: 2%; height: 75px;"></textarea>
                <button type="submit" class="btn btn-success" style="margin-top: 2%">Create</button>
                <a href="javascript:void(0);" class="btn btn-danger" rel="modal:close" style="display: inline-block; margin-top: 2%">Close</a>
            </form>              
        </div>
        <p align="right"><button class="btn btn-light" style="background-color: #cfcabc;"><a href="#add_testimonial_modal" rel="modal:open" style="color: black; text-decoration: none;">Add Testimonial</a></button></p> 
          </form>
      <table class="table table-striped table-dark" style="width: 90%; margin-left: 15%;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">View Testimonial</th>
      <th scope="col" style="width: 20%;">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $sql_query = "SELECT * FROM `testimonial`";
    $result = mysqli_query($conn, $sql_query);
    $rowcount=mysqli_num_rows($result);
    if($rowcount>0){
      $i=0;
      while($testimonial = mysqli_fetch_assoc($result)) {
        $i++;
        $testimonial_id = $testimonial['id'];
        ?>
        <tr>
          <th scope="row"><?php echo $i; ?></th>
          <td><?php echo $testimonial['name']; ?></td>
          <td><?php echo $testimonial['designation']; ?></td>
          <td><a href="#view_post_modal_<?php echo $testimonial_id ?>" rel="modal:open">View Testimonial</a></td>
          <td>
            <div class="row">
              <div class="col-md-3">
                <a href="#edit_testimonial_modal_<?php echo $testimonial_id ?>" rel="modal:open" class="btn btn-success"><i class="fas fa-edit"></i></a>
              </div>
              <div class="col-md-3">
                <form action="update_testimonial_function.php" method="post">
                  <input type="hidden" name="testimonial_id" value="<?php echo $testimonial_id; ?>">
                  <input type="hidden" name="trigger" value="delete_testimonial">
                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
              </div>
            </div>
          </td>
        </tr>
        <div id="view_post_modal_<?php echo $testimonial_id ?>" class="modal">
            <p><b>Name:</b><?php echo $testimonial['name']; ?></p>
            <p><b>Designation:</b><?php echo $testimonial['designation']; ?></p>
            <p><b>Quote:</b><?php echo $testimonial['quote']; ?></p>                
            <a href="javascript:void(0);" class="btn btn-danger" rel="modal:close" style="display: inline-block; margin-top: 2%">Close</a>
        </div>
        <div id="edit_testimonial_modal_<?php echo $testimonial_id ?>" class="modal">
            <form action="update_testimonial_function.php" method="POST">
                <input type="hidden" name="trigger" value="edit_testimonial">
                <input type="hidden" name="testimonial_id" value="<?php echo $testimonial_id; ?>">
                <input type="text" name="name" placeholder="Name" value="<?php echo $testimonial['name']; ?>"/>
                <input type="text" name="designation" placeholder="Designation" value="<?php echo $testimonial['designation']; ?>" style="margin-top: 2%;"/>
                <textarea name="quote" placeholder="Quote" style="margin-top: 2%; width: 45%;"><?php echo $testimonial['quote']; ?></textarea>
                <button type="submit" class="btn btn-success" style="margin-top: 2%;">Update</button>
            </form>              
            <a href="javascript:void(0);" class="btn btn-danger" rel="modal:close" style="display: inline-block; margin-top: 2%">Close</a>
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