<style>
	/***** Sidebar *****/

body {
    position: relative;
    overflow-x: hidden;
    background-color: #CFD8DC;
}
body,
html { height: 100%;}
.nav .open > a, 
.nav .open > a:hover, 
.nav .open > a:focus {background-color: transparent;}

/*-------------------------------*/
/*           Wrappers            */
/*-------------------------------*/

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 220px;
}

#sidebar-wrapper {
    z-index: 1000;
    left: 220px;
    width: 0;
    height: 100%;
    margin-left: -220px;
    /*overflow-y: auto;
    overflow-x: hidden;*/
    background: #1a1a1a;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#sidebar-wrapper::-webkit-scrollbar {
  display: none;
}

/*-------------------------------*/
/*     Sidebar nav styles        */
/*-------------------------------*/
.navbar {
  padding: 0;
}

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 220px;
    margin: 0;
    padding: 0;
    list-style: none;
    
}

.sidebar-nav li {
    position: relative; 
    line-height: 20px;
    display: inline-block;
    width: 100%;
}

.sidebar-nav li:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    height: 100%;
    width: 3px;
    background-color: #1c1c1c;
    -webkit-transition: width .2s ease-in;
      -moz-transition:  width .2s ease-in;
       -ms-transition:  width .2s ease-in;
            transition: width .2s ease-in;

}
.sidebar-nav li:hover{
  background: skyblue !important;
  border-radius: 10px;
  margin-left: 10px;
  margin-right: 10px;
}
.sidebar-nav li:hover:before,
.sidebar-nav li.open:hover:before {
    width: 100%;
    -webkit-transition: width .2s ease-in;
      -moz-transition:  width .2s ease-in;
       -ms-transition:  width .2s ease-in;
            transition: width .2s ease-in;

}

.sidebar-nav li a {
    display: block;
    font-size: 15px;
    color: #ddd;
    text-decoration: none;
    padding: 10px 15px 10px 30px;    
}

.sidebar-nav li a:hover,
.sidebar-nav li a:active,
.sidebar-nav li a:focus,
.sidebar-nav li.open a:hover,
.sidebar-nav li.open a:active,
.sidebar-nav li.open a:focus{
    color: #fff;
    text-decoration: none;
    background-color: transparent;
}
.sidebar-header {
    text-align: center;
    font-size: 20px;
    position: relative;
    width: 100%;
    display: inline-block;
}
.sidebar-brand {
    height: 65px;
    position: relative;
    background:#212531;
    background: linear-gradient(to right bottom, #2f3441 50%, #212531 50%);
   padding-top: 1em;
}
.sidebar-brand a {
    color: #ddd;
}
.sidebar-brand a:hover {
    color: #fff;
    text-decoration: none;
}
.dropdown-header {
    text-align: center;
    font-size: 1em;
    color: #ddd;
    background:#212531;
    background: linear-gradient(to right bottom, #2f3441 50%, #212531 50%);
}
.sidebar-nav .dropdown-menu {
    position: relative;
    width: 100%;
    padding: 0;
    margin: 0;
    border-radius: 0;
    border: none;
    background-color: #222;
    box-shadow: none;
}
.dropdown-menu.show {
    top: 0;
}
</style>
    <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
     <ul class="nav sidebar-nav">
       <div class="sidebar-header">
       <div class="sidebar-brand">
         <a href="#" style="padding-right: 30%;">Menu</a></div></div>
       <li><a href="index.php"><i class="fa fa-fw fa-home"></i>&nbsp;&nbsp;Home</a></li>
       <li><a href="profile.php"><i class="fas fa-user"></i>&nbsp;&nbsp;Account</a></li>
       <?php
            if($_SESSION['user_type'] == 'donor') 
            {
          ?>
       <li><a href="add-post.php"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Post</a></li>
       <?php
     }
            if($_SESSION['user_type'] == 'agent') 
            {
          ?>
       <li><a href="pendingdonations.php"><i class="fas fa-user-clock"></i>&nbsp;&nbsp;Requests</a></li>
       <li><a href="collectionrecords.php"><i class="fas fa-handshake"></i>&nbsp;&nbsp;Collected Donations</a></li>
       <?php
            }
       ?>
       <?php
            if($_SESSION['user_type'] == 'admin') 
            {
          ?>
       <li><a href="admincontrol.php"><i class="fas fa-smile"></i>&nbsp;&nbsp;Approval Table</a>
       <li><a href="testimonial-forum.php"><i class="fas fa-quote-right"></i>&nbsp;&nbsp;Testimonial Forum</a>
       </li>
       <?php
     }
        if(isset($_SESSION['user_id']))
        {
          ?>
          <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</a></li>
          <?php
        }
       ?>
      </ul>
  </nav>
        <!-- /#sidebar-wrapper -->
