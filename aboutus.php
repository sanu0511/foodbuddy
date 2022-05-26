<?php
include 'header.php';
?>
<style type="text/css">
    .about-us-image{
        border-radius: 80%;
        width: 200px;
        height: 250px;
        margin-left: 25px;
    }
    .gmap_canvas {
        overflow:hidden;
        background:none!important;
        height:400px;
        width:500px;
    }
    h4{
        text-align: center;
    }
</style>
<div class="block" >
    <h2 style="text-align: center;">A little about us…</h2>
    <p align="justify" style="text-align: center; font-size: 160%; padding-top: 3%;font-family: system-ui">Foodbuddy website is launched with the vision of providing food to those who are seeking for good food but not get due to various issue. It's a non profitable  organization which creates a bridge between the food wastage and the needed one. Our agents maintain proper processing to provide best services.</p>
</div>
<div class="headings" style="margin-bottom: 350px;">
    <h2 class="panel_heading" style="padding-top: 2%"><u>Meet the Team</u></h2>
    <p align="center" style="font-family: system-ui;font-size: 120%;">We started with two people, one shared dream, and a lot of coffee. We've since grown to over many people across our country!</p>
    <br>

    <div style="margin-left: 10%;">
        <div class="col-md-2">
            <img class="about-us-image" alt="100x100" src="images/demo/prapti.jpg">
            <p align="center" style="margin-left: 40px;"><b>Prapti Bhattacharya</b></p>
        </div>  
        <div class="col-md-2">
            <img class="about-us-image" alt="100x100" src="images/demo/shristi.jpg">
            <p align="center" style="margin-left: 42px;"><b>Shristi Chakraborty</b></p>
        </div>  
        <div class="col-md-2">
            <img class="about-us-image" alt="100x100" src="images/demo/pradipta.jpg">
            <p align="center" style="margin-left: 50px;" ><b>Pradipta Dey</b></p>
        </div>
        <div class="col-md-2">
            <img class="about-us-image" alt="100x100" src="images/demo/avijit.jpg">
            <p align="center" style="margin-left: 50px;"><b>Avijit Sen</b></p>
        </div>
        <div class="col-md-4">
            <img class="about-us-image" alt="100x100" src="images/demo/kislay.jpg" style="    width: 172px;">
            <p align="center" style="margin-right: 160px;"><b>Kislay Raj</b></p>
        </div>
    </div> 
</div>
<div class="" style="margin-top: 50px;">
    <h2 align="justify">Please get in touch and our expert support team will answer all your questions.</h2>
    <div class="wrapper_post">
        <form action="add_post_function.php" method="post" enctype="multipart/form-data" style="padding-right: 12%;">
            
            <div id="wizard_contact">
                <!-- SECTION 1 -->
                <h4></h4>
                <section>
                    <div class="form-row"> <input type="text" class="form-control" name="name" placeholder="Name" required> </div>
                    <div class="form-row"> <input type="text" class="form-control" name="email" placeholder="Email" required> </div>
                    <div class="form-row"> <input type="text" class="form-control" name="contact no" placeholder="Contact No" required> </div>
                </section> <!-- SECTION 2 -->
                <h4></h4>
                <br>
                <p align="center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </p>
            </div>
        </form>

    </div>
</div>
<?php
include 'footer.php';
?>