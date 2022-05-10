<!--
  1. Build the register back end in this file. (EASY) <-- this is what I want to do
  2. Create an external file that is for backend. (Amateur)
-->

<?php 

include('../admin/login_reg_hiker.php');
//include('../admin/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<style>

/*  SIGN UP / REGISTER 
------------------------------*/

.signup-page {
    width: 60%;
    height: 60%;
    padding: 5% 0 0;
    margin: auto;
    background-color: white;
    border-style: outset;
    box-shadow: 10px 10px 5px lightblue;
  }
  


  .navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/*
.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: red;
}*/
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Ticket Reservation</title>

  	<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.min.css">

</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<a class="navbar-brand" href="#"> Online Ticketing</a>
		<!-- <ul class="nav navbar-nav">
      <li><a href="index.php">Login here</a></li>
      <li>
        <div class="dropdown">
        <button class="dropbtn" onclick="myFunction()">Dropdown
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" id="myDropdown">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        </div> 
      </li>
        
		</ul> -->
		<ul class="nav navbar-nav navbar-right">
	      <li><a href="../"><span class="glyphicon glyphicon-backward"></span> Return Home</a></li>
	    </ul>
	</div>

    
</nav>

<div class="signup-page">
    <div class="form">
        <center><h2>Create Account </h2></center>

        <br>
        <p class="alert alert-info">
            <marquee behavior="" scrollamount="10" direction="">You need to create an account to book/view slots for hiking!
            </marquee>
        </p>

 
<div class="panel-body">
			<form class="form-horizontal" role="form" id="form-login" action="login_reg_hiker.php" method="post">
    <!-- Note that if you want to connect to database, always put the "name" attribute to $_POST -->
      <!-- Username -->
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="un">Username:</label>
			    <div class="col-sm-10">
			        <input type="text" name="username" class="form-control" id="un" placeholder="Enter Username" autofocus="" required=""><br>
            
            </div>
			  </div>
        
        <!-- Password -->
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="pwd">Password:</label>
			    <div class="col-sm-10"> 
			      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter Password" required="">
			    </div>
			  </div>

        <!-- Confirm Password -->
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="cpwd">Confirm Password:</label>
			    <div class="col-sm-10"> 
			      <input type="password" name="c_pass" class="form-control" id="cpwd" placeholder="Re-enter Password" required="">
			    </div>
			  </div>

        <!-- Show password -->
        <!-- 
        <div class="col-sm-10"> 
        <p> <input type="checkbox" onclick="Toggle()">Show Password </p>
        </d>

         -->

        
        
        <!-- Email -->
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="email">Email:</label>
			    <div class="col-sm-10"> 
                  <input type="email"class="form-control" name="email" id="eml" placeholder="Enter Email" required="">  
          </div>
			  </div>

        <!-- Contact number -->
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="tel">Contact number:</label>
			    <div class="col-sm-10"> 
                  <input type="tel" name="pNum" class="form-control" id="tel" placeholder="Enter Contact Number" required="">  
                </div>
			  </div>

        <!-- Redirect to login page -->
			  <div class="form-group">
				  <div class="col-sm-offset-2 col-sm-10" >
				  <p>Already have an account? <a href="index.php">Log in here!</a>
				  </div>		
			  </div>
 
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default" name ="register" id="regButton"> Register
			      <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
			      </button>
			    </div>
			  </div>
			</form>
		</div>
	</div>
    </div>
</div>
</div>


<!-- JQUERY FOR REGISTERING -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script>
	function Toggle() {
		let btt = pass1;
		let btt2 = pass2;

		if (btt.type === "password") {
			btt.type = "text";
			btt2.type = "text";
		} else {
			btt.type = "password";
			btt2.type = "password";
		}
	}

</script>



</body>
</html>







