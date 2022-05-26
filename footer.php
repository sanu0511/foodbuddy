<div class="bgded overlay row4" style="background-image:url('images/demo/footer.jpg');">
  <footer id="footer" class="hoc clear"> 
    <div class="center btmspace-50">
      <h6 class="heading">Foodbuddy</h6>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <!-- <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li> -->
      </ul>
      <p class="nospace"><b>STOP WASTING START FEEDING</b></p>
    </div>
    <hr class="btmspace-50">
    <div class="group btmspace-50">
      <div class="one_quarter first">
        <h6 class="heading">Contact Us</h6>
        <p class="nospace btmspace-15">We will reach you within 24 hours</p>
        <form method="post" action="contact_us_function.php">
          <fieldset>
            <input class="btmspace-15" type="text" name="name" placeholder="Name">
            <input class="btmspace-15" type="text" name="email" placeholder="Email">
             <input class="btmspace-15" type="text" name="contact no" placeholder="Contact No">
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>
      </div>
      <div class="one_quarter">
        <ul class="nospace linklist">
          
          <li>
            <article>
              <?php
                if(!isset($_SESSION['logged_in'])){
              ?>
              <p class="nospace btmspace-10"><a href="login.php">Login</a></p>
              <?php
                  }
              ?>
            </article>
          </li>
          <?php
                if(!isset($_SESSION['logged_in'])){
              ?>
          <li><a href="donorsignup.php">Signup as Donor</a></li>
          <li><a href="agentsignup.php">Signup as Agent</a></li>
          <?php
            }
          ?>
        </ul>
      </div>
      <div class="one_quarter">
        <ul class="nospace linklist">
          <li>
            <article>
              <p class="nospace btmspace-10"><a href="terms&conditions.php">Terms & Conditions</a></p>
            </article>
          </li>
          <li><a href="privacypolicy.php">Privacy Policy</a></li>
          
          <li><a href="aboutus.php">About Us</a></li>
        </ul> 
      </div>
      <div class="one_quarter">
        <ul class="nospace linklist">
          <li>
            <article>
              <p class="nospace btmspace-10"><a href="gallery.php">Our Gallery</a></p>
            </article>
          </li>
          <li><a href="contactus.php">Contact Us</a></li>
          
          <li><a href="collecteddonations.php">Collected Donations</a></li>
        </ul> 
      </div>
    </div>
    <div id="ctdetails" class="clear">
      <ul class="nospace clear" style="">
        <li class="one_quarter first">
          <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +00 (123) 456 7890</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> projectworkinfo@gmail.com</span></div>
        </li>
        <!-- <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Monday - Sunday:</strong>24 Hours</span></div>
        </li> -->
      </ul>
    </div>
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved</p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/image-uploader.min.js"></script>
<script src="layout/scripts/custom-script.js"></script>
</body>
</html>