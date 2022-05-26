<?php
include 'header.php';
include 'db_connection.php';
include 'common_functions.php';
?>
  <div id="pageintro" class="hoc clear"> 
    <article>
      <h3 class="heading">STOP WASTING START FEEDING</h3>
      <p>Foodbuddy is a not for profit organization, designing interventions to reduce hunger among underserved communities in India.</p>
      <footer>
        <?php
                if(!isset($_SESSION['logged_in'])){
              ?>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="login.php">Login</a></li>
          <li><a class="btn inverse" href="signupas.php">Signup</a></li>
        </ul>
        <?php
      }
        ?>
      </footer>
      </footer>
    </article>
  </div>
</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <section id="introblocks" style="margin-left: 83px;">
      <ul class="nospace group btmspace-80">
        <li class="one_third first">
          <figure><a class="imgover" href="#"><img src="images/demo/foodpic.jpg" alt="" style="border-radius: 10px;"></a>
            <figcaption>
              <h6 class="heading">No Food Waste</h6>
              <p>We aim to redistribute surplus food to those who are in need of it.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="images/demo/citypic.jpg" alt="" style="border-radius: 10px;"></a>
            <figcaption>
              <h6 class="heading">Area Of Service</h6>
              <p>Everyday the excess food collected is used to feed an average of 1400 people, across Kolkata</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="images/demo/freefoodpic.jpg" alt="" style="border-radius: 10px;"></a>
            <figcaption>
              <h6 class="heading">Non Profit Organization</h6>
              <p>We run on complete donation to feed the millions in mission to achieve zero hunger all over the city.</p>
            </figcaption>
          </figure>
        </li>
      </ul>
    </section>
    <hr class="btmspace-80">
    <section id="overview">
      <div class="sectiontitle">
        <p class="heading underline font-x2">Our Values</p>
      </div>
      <ul class="nospace group btmspace-80" style="margin-left: 12%;">
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-truck"></i></a>
              <h6 class="heading">FAST COLLECTION</h6>
            </div>
            <p align="justify">We are providing fast delivery to desired place as soon as our food processing gets completed.We always try to provide best services so that the food reach in time where needed.</p>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-box"></i></a>
              <h6 class="heading">FULLY PACKAGED</h6>
            </div>
            <p align="justify">Our organization always tried to provide best in class package so that you get the food with proper hygiene.</p>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-heartbeat"></i></a>
              <h6 class="heading">100% HYGIENE</h6>
            </div>
            <p align="justify">From the beginning to end we always try to maintain 100% hygiene. Any kind of unhygienic processing is not tolerated.</p>
          </article>
        </li>
      </ul>
      <footer class="center"><a class="btn" href="aboutus.php">Who Are We ???</a></footer>
    </section>
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/motherteresa.png');">
  <section id="splitfifty" class="hoc container clear">
    <div class="sectiontitle">
      <p class="heading underline font-x2">Valueable Quote</p>
    </div>
    <div class="bgded clear" style="background-image:url('images/demo/backgrounds/food.jpg');"> 
      <article>
        <p style="font-size: 25px;
                  font-family: cursive;">
          It is better to give food<br>
          To someone homeless<br>
          Than to waste food<br>
        </p>
        <p align="right" style="font-size: 30px;font-family: cursive;"><b>-Mother Teresa</b></p>
        <footer></footer>
      </article>
    </div>
  </section>
</div>
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="sectiontitle">
      <p class="heading underline font-x2">OUR COMMUNITY</p>
    </div>
    <?php
      $agent_query = "SELECT * FROM `foodbuddy_users` WHERE `user_type`='agent'";
      $result_agent = mysqli_query($conn, $agent_query);
      $rowcount_agent=mysqli_num_rows($result_agent);
      $donor_query = "SELECT * FROM `foodbuddy_users` WHERE `user_type`='donor'";
      $result_donor = mysqli_query($conn, $donor_query);
      $rowcount_donor=mysqli_num_rows($result_donor);
      $feeder_query = "SELECT SUM(`head_count`) AS `head_count` FROM `food_post` WHERE `collected_agent_id`<>0";
      $result_feeder = mysqli_query($conn, $feeder_query);
      $row_feeder = mysqli_fetch_assoc($result_feeder);
    ?>
    <ul id="stats" class="nospace group">
      <li><i class="fas fa-utensils"></i>
        <p><a href="#"><?php echo $row_feeder['head_count']; ?></a></p>
        <p>FEEDERS</p>
      </li>
      <li><i class="fas fa-users"></i>
        <p><a href="#"><?php echo $rowcount_donor; ?></a></p>
        <p>USERS</p>
      </li>
      <li><i class="fas fa-truck"></i>
        <p><a href="#"><?php echo $rowcount_agent; ?></a></p>
        <p>AGENTS</p>
      </li>
      <li><i class="fas fa-map-marker-alt"></i>
        <p><a href="#">7</a></p>
        <p>PLACES</p>
      </li>
    </ul>
  </section>
</div>
  <div class="wrapper row3" style="background-color: gray; color: white;">
    <section class="hoc container clear">
      <div class="owl-carousel owl-theme">
        <?php
          $sql_query = "SELECT * FROM `testimonial`";
          $result = mysqli_query($conn, $sql_query);
          $rowcount=mysqli_num_rows($result);
          if($rowcount>0){
            $i=1;
            while($row = mysqli_fetch_assoc($result)) {
              ?>
              <div>
                <blockquote><?php echo $row['quote'] ?></blockquote>
                <h6 class="heading"><?php echo $row['name'] ?></h6>
                <em><?php echo $row['designation'] ?></em> 
              </div>
              <?php
            }
          } 
        ?>
      </div>
    </section>
  </div>
<br>
<br>
<?php
include 'footer.php';
?>