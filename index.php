<?php

//to allows automatic login if user has already logged in
session_start();

//check if any users were already logged in
// if(isset($_SESSION["selectedUser"])) {
//     if($_SESSION["selectedUser"] == "admin") {
//       header("location: checkAdmin.php");
//     }
//     else if($_SESSION["selectedUser"] == "hiker") {
//       header("location: firstPage.php");
//     }
//     else if($_SESSION["selectedUser"] == "sagent") {
//       header("location: firstPage.php");
//     }
//     else if($_SESSION["selectedUser"] == "bagent") {
//       header("location: salesAgent.php");
//     }
//     else if($_SESSION["selectedUser"] == "mguide") {
//       header("location: ");
//     }
// }
//if user logged out before, continue this script

?>
<!-- 

Blessed Carlo Acutis, pray for us programmers and students who are doing this FYP.

Amen.
 -->
<!DOCTYPE html>

<head>
<style>
.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
  margin-left: 5px;
  margin-bottom: 5px;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}


</style>
	
<meta charset="utf-8">
	
<meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kinabalu</title>
	

<!-- [ FONT-AWESOME ICON ] 
        
=========================================================================================================================-->
	
<link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">

	
<!-- [ PLUGIN STYLESHEET ]
        
=========================================================================================================================-->
	
<link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
	
<link rel="stylesheet" type="text/css" href="css/animate.css">
	
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
	
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
	
<!-- [ Boot STYLESHEET ]
        
=========================================================================================================================-->
	
<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">
	
<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">
       
<!-- [ DEFAULT STYLESHEET ] 
        
=========================================================================================================================-->
	
<link rel="stylesheet" type="text/css" href="css/style.css">
        
<link rel="stylesheet" type="text/css" href="css/responsive.css">
	
<link rel="stylesheet" type="text/css" href="css/color/rose.css">
        
<!-- DRIFT CHATBOX -->

<!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('x624zthai9fy');
</script>
<!-- End of Async Drift Code -->
<!-- END DRIFT CHATBOX -->
</head>
<body >

<!-- [ LOADERs ]

================================================================================================================================-->
	
    <div class="preloader">
    
<div class="loader theme_background_color">
        
<span></span>
      
    
</div>
</div>
<!-- [ /PRELOADER ]

=============================================================================================================================-->

<!-- [WRAPPER ]

=============================================================================================================================-->

<div class="wrapper">
  
<!-- [NAV]
 
============================================================================================================================-->    
   
<!-- Navigation
    ==========================================-->
    
<nav  class=" nim-menu navbar navbar-default navbar-fixed-top">
      
<div class="container">
        
<!-- Brand and toggle get grouped for better mobile display -->
        
<div class="navbar-header">
          
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            
<span class="sr-only">Toggle navigation</span>
            
<span class="icon-bar"></span>
            
<span class="icon-bar"></span>
            
<span class="icon-bar"></span>
          
</button>
            
<a class="navbar-brand" href="index.php"><span class="themecolor">M</span>ount <span class="themecolor">K</span>inabalu</a>
        
</div>

        
<!-- Collect the nav links, forms, and other content for toggling -->
        
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
<ul class="nav navbar-nav navbar-right">
            
<li><a href="#home" class="page-scroll"><h3>Home</h3></a></li>
            
<li><a href="#two" class="page-scroll"><h3>About</h3></a></li>

<li><a href="#loginRegisterModal" data-toggle="modal" onclick="topFunction()"><h3>Login</h3></a></li>
          
</ul>
        
</div>
<!-- /.navbar-collapse -->

<script>
// This modal Jscript is connected to the Login set.
  function testFunction() {
    window.alert("Hello World!");
  }
  function regFunc() {
    window.location.href="admin/register_individual.php";
  }
  function regbAgent(){
    window.location.href="admin/register_bAgent.php";
  }

  function regsAgent(){
    window.location.href="admin/register_sAgent.php";
  }

  function regmGuide(){
    window.location.href="admin/register_mGuide.php";
  }

  function loginFunc() {
    window.location.href="admin/index.php"; 
  }
  function bookFunc() {
    window.location.href="reserved.php"; 
  }
  function regSelFunc() {
    window.location.href="admin/registerSelectionPage.php"; 
  }

  
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  } 
</script>

</div><!-- /.container-fluid -->
    
</nav>


   
<!-- [/NAV]
 
============================================================================================================================--> 
    
   
<!-- [/MAIN-HEADING]
 
============================================================================================================================--> 
   
<section class="main-heading" id="home">
       
<div class="overlay">
           
<div class="container">
               
<div class="row">
                   
<div class="main-heading-content col-md-12 col-sm-12 text-center">
        
<h1 class="main-heading-title"><span class="main-element themecolor" data-elements=" Mount Kinabalu, NO, Mount Kinabalu"></span></h1>
 
<h1 class="main-heading-title"><span class="main-element themecolor" data-elements=" Online Booking System, Online Booking System, Online Booking System"></span></h1>
       
<p class="main-heading-text">2022 & 2023 slots are now available! Please click the reservation button now.</p>
        
<div class="btn-bar">
          
<a data-toggle="modal" href="#loginRegisterModal" class="btn btn-custom theme_background_color">Book Now!</a>
   


<!-- Modal -->
<!-- modal fade -->
<div class=" modal fade" id="loginRegisterModal" tabindex="-1" role="dialog" aria-labelledby="loginRegisterModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class=" modal-content">
      <div class="modal-header ">
        <h5 class="modal-title" id="loginRegisterModalLongTitle" style="color: black;">Alert!</h5>
        <button type="button" style="margin-bottom: 10px;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color: black;">
        Are you an existing user?<br> If you are, please login. Else, please click on register. <br>
      </div>
      <div class="modal-footer">

            <!-- <div class="row">
              <div class="col">
                <button type="submit" class="btn btn-info" onclick="regFunc()">Hiker Register</button> 
              </div>
              <div class="col">
                <button type="submit" class="btn btn-info" onclick="regbAgent()">Booking Agent Register</button>
              </div>
              <div class="w-100"></div>
              <div class="col">
                <button type="submit" class="btn btn-info" onclick="regsAgent()">Sales Agent Register</button>
              </div>
              <div class="col">
                <button type="submit" class="btn btn-info" onclick="regmGuide()">Mountain Guide Register</button>
              </div>
            </div> -->
            
        <!-- <center> -->
          <!-- <div class="container"> -->
            <div class="line" style="display:inline;">
              <button type="button" class="btn btn-primary" onclick="loginFunc()">Login</button>
              <button type="button" class="btn btn-primary" onclick="regSelFunc()">Register</button>
            </div>
            <div class="col">
              <!-- <button type="button" class="btn btn-primary" onclick="loginFunc()">Register</button> -->
            </div>
          <!-- </div> -->
        <!-- </center> -->
      </div>
    </div>
  </div>
</div>
<!-- modal -->


</div>
      
</div>
               
</div>
           
</div>
       
</div>  
      
   
</section>
 

    
 
<!-- [/MAIN-HEADING]
 
============================================================================================================================-->
 
 
 
<!-- [ABOUT US]
 
============================================================================================================================-->
 

 
 
 
<!-- [/ABOUTUS]
 
 
============================================================================================================================-->
 
 
 
 
 
<!-- [INSPIRATION]
 
============================================================================================================================-->
 

 
 
<!-- [/INSPIRATION]
 

============================================================================================================================-->
 
 
<!-- [/SERVICES]
 
============================================================================================================================-->
 
 
 

 
 
<!-- [/SERVICES]
 
============================================================================================================================-->
 
 
 
<!-- [CONTACT]
 
============================================================================================================================-->
 

 
 
<!-- [/CONTACT]
 
============================================================================================================================-->
 
 
 
<!-- [FOOTER]
 
============================================================================================================================-->
 

<footer class="site-footer section-spacing text-center " id="eight">
    
  
<div class="container">
    
<div class="row">
      
<div class="col-md-4">
        
<p class="footer-links"><a href="#">Terms of Use</a> <a href="#">Privacy Policy</a></p>
      
</div>
      
<div class="col-md-4"> <small>&copy; 2022 Multimedia University. All rights reserved.</small></div>
      
<div class="col-md-4"> 
        
<!--social-->
        
        
<ul class="social">
          
<li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter "></i></a></li>
          
<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
          
<li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
        
</ul>
        
        
<!--social end--> 
        
      
</div>
    
</div>
  
</div>

</footer>

 
 
 
<!-- [/FOOTER]
 
============================================================================================================================-->
 
 
 

</div>
 

<!-- [ /WRAPPER ]

=============================================================================================================================-->

	
<!-- [ DEFAULT SCRIPT ] -->
	
<script src="library/modernizr.custom.97074.js"></script>
	
<script src="library/jquery-1.11.3.min.js"></script>
        
<script src="library/bootstrap/js/bootstrap.js"></script>
	
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>	
	
<!-- [ PLUGIN SCRIPT ] -->
        
<script src="library/vegas/vegas.min.js"></script>
	
<script src="js/plugins.js"></script>
        
<!-- [ TYPING SCRIPT ] -->
         
<script src="js/typed.js"></script>
         
<!-- [ COUNT SCRIPT ] -->
         
<script src="js/fappear.js"></script>
       
<script src="js/jquery.countTo.js"></script>
	
<!-- [ SLIDER SCRIPT ] -->  
        
<script src="js/owl.carousel.js"></script>
         
<script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        
<script type="text/javascript" src="js/SmoothScroll.js"></script>
        
        
<!-- [ COMMON SCRIPT ] -->
	<script src="js/common.js"></script>





  <!-- <?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?> -->
</body>


</html>