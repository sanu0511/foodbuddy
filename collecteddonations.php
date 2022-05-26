<?php
include 'header.php';
include 'db_connection.php';
include 'common_functions.php';
?>
<div class="wrapper row3" style="">
  <div class="wrapper row3" style="background-image: url('images/demo/collected.jpg');">
  <section class="hoc container clear"> 
    <div class="sectiontitle">
      <p class="heading underline font-x2"><b>Collected Donations</b></p>
    </div>
    <ul id="latest" class="nospace group" style="margin-left: 10%;">
    <?php
      $sql_query = "SELECT * FROM `food_post` WHERE `status`=1 AND `collected_agent_id`<>0";
      $result = mysqli_query($conn, $sql_query);
      $rowcount=mysqli_num_rows($result);
      if($rowcount>0){
        $i=1;
        while($row = mysqli_fetch_assoc($result)) {
          $custom_class = (($i==1)||(($i%4)==0))?"first":"";
          $post_id = $row['id'];
          $user_id = $row['user_id'];
          $agent_id = $row['collected_agent_id'];
          $agent_data = get_user_by_id($agent_id);
          $user_data = get_user_by_id($user_id);
          $sql_query_image = "SELECT * FROM `post_images` WHERE `post_id`='$post_id'";
          $result_images = mysqli_query($conn, $sql_query_image);
          $row_post_image = mysqli_fetch_assoc($result_images);
    ?>
      <li class="one_third <?php echo $custom_class; ?>" style="list-style-position: inside;
    border: 5px solid darkseagreen; width: 30%; height: 511px; margin-bottom: 8px;">
        <article><a class="" href="#"><img src="<?php echo $row_post_image['image_path']; ?>" alt=""></a>
          <ul class="nospace meta group">
            <li><i class="fas fa-user"></i> <a href="#"><?php echo $user_data['first_name']." ".$user_data['last_name']; ?></a></li>
            <li><i class="far fa-clock"></i>
              <time><?php echo $row['created_at']; ?></time>
            </li>
          </ul>
          <div class="excerpt" style="background: aliceblue;">
            <h6 class="heading"><?php echo $row['post_title']; ?></h6>
            <p><?php echo $row['post_description']; ?></p>
           <h1><span class="badge progress-bar-success">collected: <?php echo $agent_data['first_name']." ".$agent_data['last_name']; ?></span></h1>
          </div>
          <br>
        </article>
      </li>
    <?php
    $i++;
        }
      }
    ?>
    </ul>
  </section>
</div>
<?php
include 'footer.php';
?>
