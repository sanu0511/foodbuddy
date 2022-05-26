<?php
include 'header.php';
?>
<style>
    body,
    html {
      margin: 0;
      padding: 0;
      height: 100%;
      background: #60a3bc !important;
    }
    .user_card {
      height: 1200px;
      width: 350px;
      margin-top: auto;
      margin-bottom: auto;
      background: #f39c12;
      position: relative;
      display: flex;
      justify-content: center;
      flex-direction: column;
      padding: 10px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      border-radius: 5px;

    }
    .brand_logo_container {
      position: absolute;
      height: 170px;
      width: 170px;
      top: -75px;
      border-radius: 50%;
      background: #60a3bc;
      padding: 10px;
      text-align: center;
    }
    .brand_logo {
      height: 150px;
      width: 150px;
      border-radius: 50%;
      border: 2px solid white;
    }
    .form_container {
      margin-top: 100px;
    }
    .login_btn {
      margin-left: 19%;
      width: 41%;
      background: #c0392b !important;
      color: white !important;
    }
    .login_btn:focus {
      box-shadow: none !important;
      outline: 0px !important;
    }
    .login_container {
      padding: 0 2rem;
    }
    .input-group-text {
      background: #c0392b !important;
      color: white !important;
      border: 0 !important;
      border-radius: 0.25rem 0 0 0.25rem !important;
    }
    .input_user,
    .input_pass:focus {
      box-shadow: none !important;
      outline: 0px !important;
    }
    .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
      background-color: #c0392b !important;
    }
</style>
<h2 class="post_form_heading"><u>Agent Signup</u></h2>
  <div class="container h-100" style="margin-left: 36%;">
    <div class="d-flex justify-content-center h-100">
      <div class="user_card" style="height: 1345px;">
        <div class="d-flex justify-content-center" style="margin-left: 23%;">
          <div class="brand_logo_container">
            <img src="images/demo/logo.jpeg" class="brand_logo" alt="Logo" style="">
          </div>
        </div>
        <div class="d-flex justify-content-center form_container">
          <form action="signupagent_function.php" enctype="multipart/form-data" method="POST" style="margin-left: 12%;">
            <div class="input-group" style="width: 80%;">
              <label for="first_name">First Name:</label>
        <input type="text" style =" " class="form-control" name="first_name" placeholder="First Name" required="required"></div>
        <br>
            <div class="input-group"style="width: 80%;">
              <label for="last_name">Last Name:</label>
          <input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
        <br>
        <div class="input-group"style="width: 80%;">
              <label for="email">Email:</label>
          <input type="email" style =" " class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <br>
        <div class="input-group"style="width: 80%;">
              <label for="Id">Id Proof:</label>
              <select name="id_proof" id="id" required="">
                <option selected="true" disabled="disabled">Select Id</option>
                <option value="adhaarcard">Adhaar Card</option>
                <option value="votercard">Voter Card</option>
                <option value="pancard">Pan Card</option>
              </select>
        </div>
        <br>
        <div class="input-group"style="width: 80%;">
              <label for="idno">Id Proof No:</label>
          <input type="text" style ="" class="form-control" name="id_proof_number" placeholder="Id Proof Number" required="required">
        </div>
        <br>
        <label for="password">Password:</label>
        <div class="input-group"style="width: 80%;">
        <input id="user_password" type="password" class="form-control" name="password" placeholder="Password" required="required">
      <span class="input-group-addon view_password"><i class="glyphicon glyphicon-eye-open icon_eye_password"></i></span>
    </div>
    <br>
     <label for="confirmpassword">Confirm Password:</label>
    <div class="input-group"style="width: 80%;">
              <input id="user_confirm_password" type="password" class="form-control" name="password" placeholder="Confirm Password" required="required">
      <span class="input-group-addon view_confirm_password"><i class="glyphicon glyphicon-eye-open icon_eye_confirm_password"></i></span>
    </div>
    <br>
    <div class="input-group"style="width: 80%;">
    <label for="organisation">Organisation Name:</label>
      <input style =" " class="form-control" type="text"  name="org" placeholder="Organisation Name" required="required">
    </div>  
    <br> 
    <div class="input-group"style="width: 80%;">
    <label for="Address">Address:</label>
      <textarea class="form-control" rows="5" id="address" name="address" placeholder="Enter Address" required="required"></textarea>
    </div>
    <br>  
    <div class="input-group"style="width: 80%;">
   <label for="landmark">Landmark:</label>
      <input style =" " class="form-control" type="landmark"  id="landmark" placeholder="Enter landmark" name="landmark"
  required="required">
    </div>
    <br>  
    <div class="input-group"style="width: 80%;">
   <label for="pincode">Pincode:</label>
      <input style =" " class="form-control" type="text" id="pincode" placeholder="Enter pincode" name="pincode" required="required">
    </div>
    <br>  
    <div class="input-group"style="width: 80%;">
   <label for="contact">Mobile Number:</label>
          <input style =" " class="form-control" type="contact"  name="contact" placeholder="Mobile Number" required="required">
        </div>
    <br> 
    <!-- Modal HTML embedded directly into document -->
        <div id="terms_content_modal" class="modal">
          <p style="font-size: 95%; margin-top: 5%">Use of this site is provided by FoodBuddy subject to the following Terms and Conditions:</p>
  <p align="justify" style="font-size: 95%">• Your use constitutes acceptance of these terms and conditions as at the date of your first use of the site.</p>
  <p align="justify" style="font-size: 95%">
    • FoodBuddy reserves the rights to change these terms and conditions at any time by posting changes online. Your continued use of this site after changes are posted constitutes your acceptance of this agreement as modified.
  </p>
  <p align="justify" style="font-size: 95%">
    • You agree to use this site only for lawful purposes, and in a manner which does not infringe the rights, or restrict, or inhibit the use and enjoyment of the site by any third party.
  </p>
  <p align="justify" style="font-size: 95%">
    • This site and the information, names, images, pictures, logos regarding or relating to FoodBuddy are provided “as is” without any representation or endorsement made and without warranty of any kind whether express or implied. In no event will FoodBuddy be liable for any damages including, without limitation, indirect or consequential damages, or any damages whatsoever arising from the use or in connection with such use or loss of use of the site, whether in contract or in negligence.
  </p>
  <p align="justify" style="font-size: 95%">
    • FoodBuddy does not warrant that the functions contained in the material contained in this site will be uninterrupted or error free, that defects will be corrected, or that this site or the server that makes it available are free of viruses or bugs or represents the full functionality, accuracy and reliability of the materials.
  </p>
  <p align="justify" style="font-size: 95%">
     • Unless otherwise stated, Local Food Advice and/or its licensors own the intellectual property rights for all material on Local Food Advice. All intellectual property rights are reserved. You may access this from Local Food Advice for your own personal use subject to restrictions set in these terms and conditions.
  </p>
  <p align="justify" style="font-size: 95%">
    • You must not:
  </p>
  <p align="justify" style="font-size: 90%">1.Republish material from Local Food Advice</p>
  <p align="justify" style="font-size: 90%">2.Sell, rent or sub-license material from Local Food Advice</p>
  <p align="justify" style="font-size: 90%">3.Reproduce, duplicate or copy material from Local Food Advice</p>
  <p align="justify" style="font-size: 90%">4.Redistribute content from Local Food Advice</p>
  <p align="justify" style="font-size: 95%">This Agreement shall begin on the date hereof.</p>
  <p align="justify" style="font-size: 95%">• The Website reserves the right, at its sole discretion, to change, modify, add or remove any portion of these Terms, in whole or in part, at any time. Changes in these Terms will be effective when posted, but any material change to these Terms will not be applied retroactively to any claim or dispute between you and us in connection with these Terms that arose prior to the effective date of such change. You agree to review these terms and conditions of use periodically to be aware of any changes. Your continued use of the Site after any changes to these terms and conditions of use are posted will be considered acceptance of those changes. We would thus encourage you to re-visit the 'Terms of conditions link at our site from time to time to stay abreast of any changes that are introduced.</p>
          <p><a href="javascript:void(0);" class="btn btn-danger" rel="modal:close" style="display: inline-block; margin-top: 2%">Close</a></p>
        </div>
        <div class="item row">
          <div class="col-md-1">
            <input type="checkbox" id="terms_checkbox">
          </div>
          <div class="col-md-10">
            <label for="a">Accept Our <a href="#terms_content_modal" rel="modal:open">Terms and Condition</a></label>
          </div>
        </div>
        <br>      
              <div class="d-flex justify-content-center mt-3 login_container">
          <button type="submit" name="button" class="btn login_btn">Sign Up</button>
           </div>
          </form>
        </div>
        <br>
    
        <!-- <div class="mt-4" style="margin-left: 19%; font-size: 95%;">
          <div class="d-flex justify-content-center links">
            Don't have an account? <a href="#" class="ml-2">Sign Up</a>
          </div>
          <div class="d-flex justify-content-center links" style="margin-left: 9%;">
            <a href="#">Forgot your password?</a>
          </div>
        </div> -->
      </div>
    </div>
  </div>
<?php
include 'footer.php';
?>