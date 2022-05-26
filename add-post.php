<?php
include 'header.php';
include 'sidebar.php';
?>
<style type="text/css">
  #img_preview_delete{
    width: 50px;
    height: 50px;
    margin-bottom: 20%;
  }
  .preview_img_cl{
    margin-bottom: 5%;
    padding-top: 23%;
  }
</style>
<div class="wrapper_post">
    <form action="add_post_function.php" method="post" enctype="multipart/form-data" style="margin-left: 50px;">
       <h2 class="post_form_heading"><u>Add Your Post</u></h2>
        <div id="wizard_login">
            <!-- SECTION 1 -->
            <h4></h4>
            <section>
                <div class="form-row"> <input type="text" class="form-control" name="post_title" placeholder="Title" required> </div>
                <div class="form-row"> <textarea class="form-control" rows="5" id="description" name="description" placeholder="Enter Description" required></textarea>
                  <br>
                <div class="form-row"> <textarea class="form-control" rows="5" id="address" name="address" placeholder="Enter Address" required></textarea>
                  <br>
                <div class="form-row"> <input type="text" class="form-control" name="landmark" placeholder="Landmark" required> </div>
                <div class="form-row"> <input type="text" class="form-control" name="pincode" placeholder="Pincode" required> </div>
                <div class="form-row"> <input type="number" class="form-control" name="head_count" placeholder="No. of heads" required> </div>
            </section> <!-- SECTION 2 -->
            <h4></h4>
             <br>
            <section style="margin-top: 19%;">
              <div id="filediv" class="row"><input name="image_post[]" type="file" id="file"/></div>
            </section>
      <input type="button" id="add_more" class="upload" value="Add More Files"/>
    <br>
    <p align="center"><button type="submit" class="btn btn-primary">Submit</button></p>
           
            <h4></h4>
            
        </div>
    </form>
</div>

<?php
include 'footer.php';
?>
<script>

</script>