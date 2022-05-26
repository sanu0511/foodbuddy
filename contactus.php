<?php
include 'header.php';
?>
<div class="row">
    <div class="sectiontitle">
      <p class="heading underline font-x2" style="padding-top: 5%;"><b>Contact us</b></p>
    </div>
    <div class="col-md-6">
        <h2 align="justify">Request Callback</h2>
        <div class="wrapper_post">
            <form action="add_post_function.php" method="post" enctype="multipart/form-data" style="padding-right: 12%;">
                <div id="wizard_contact">
                    <section>
                        <div class="form-row"> <input type="text" class="form-control" name="name" placeholder="Name" required> </div>
                        <div class="form-row"> <input type="text" class="form-control" name="email" placeholder="Email" required> </div>
                        <div class="form-row"> <input type="text" class="form-control" name="contact no" placeholder="Contact No" required> </div>
                    </section> 
                    <br>
                    <p align="center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-6">
        <h2 class="cnct-head"><i class="fas fa-map-marker"></i>&nbsp; Our Address</h2>
        <p class="cnct-para"> University Area, Plot No. III, B/5, New Town Rd, Action Area III, Newtown,</p>
        <p class="cnct-para"> Kolkata, West Bengal 700156</p>
        <h2 class="cnct-head"><i class="fas fa-envelope"></i>&nbsp;Mail Us</h2>
        <p class="cnct-para">projectinfowork@gmail.com</p>
    </div>
</div>
    
        <h2 align="justify">Our Location</h2>
        <div style="padding-bottom: 3%;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7369.025401314105!2d88.489901!3d22.55992!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb3b21d652126f40!2sUniversity%20of%20Engineering%20%26%20Management%20(UEM)%2C%20Kolkata!5e0!3m2!1sen!2sin!4v1650192789608!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>
<?php
include 'footer.php';
?>