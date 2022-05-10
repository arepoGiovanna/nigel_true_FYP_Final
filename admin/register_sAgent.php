<?php include('../admin/log_reg_sAgent.php');?>
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
  
#display_image{
    width: 375px;
    height: 211px;
    border: 1px solid black;
    background-position: center;
    background-size: cover;
    overflow: auto;
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
		<ul class="nav navbar-nav">

        <!-- <li><a href="index.php">Login here</a></li>
		<li>
		<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
			Register
		</a> -->

		<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			<li><a class="dropdown-item" href="#">Action</a></li>
			<li><a class="dropdown-item" href="#">Another action</a></li>
			<li><a class="dropdown-item" href="#">Something else here</a></li>
		</ul>
		</li>
        
		</ul>
		<ul class="nav navbar-nav navbar-right">
	      <li><a href="../"><span class="glyphicon glyphicon-backward"></span> Return Home</a></li>
	    </ul>
	</div>

    
</nav>

<div class="signup-page">
    <div class="form">
        <center><h2>Create Account as Sales Agent</h2></center>
        <br>
        <p class="alert alert-info">
            <marquee behavior="" scrollamount="10" direction="">Please register your PERSONAL details and your SALES details before proceeding to manage hiking slots.
            </marquee>
        </p>
        <div class="dropdown">

        <div class="panel-body">

			<form class="form-horizontal" action="log_reg_sAgent.php" role="form" id="form-login"  method="POST" enctype="multipart/form-data">
                <strong><h3>Education Background Details</h3></head></strong>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="uniColName">University/College Name:</label>
                    <div class="col-sm-10">
                        <input type="text" name="uniname" class="form-control" id="uniColName" placeholder="Enter Your University/College Name" autofocus="" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="course">Course Name:</label>
                    <div class="col-sm-10">
                        <input type="text" name="course" class="form-control" id="course" placeholder="Enter Your Course Name" autofocus="" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="cgpa">CGPA:</label>
                    <div class="col-sm-10">
                        <input type="number" name="cgpa" step="0.01" min="0.00" max="4.00" class="form-control" id="cgpa" placeholder="Enter Your CGPA here" autofocus="" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="agCert">Upload Course Certificate:</label>
                    <div class="col-sm-10"> 
                        <input type="file" name = "courseCert" id="image_input" >  
                        <div id="display_image">

                        </div>
                    </div>
                </div>

            <hr>

            <strong><h3>Personal Details</h3></head></strong>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="un">Username:</label>
			    <div class="col-sm-10">
			      <input type="text" name="uname" class="form-control" id="un" placeholder="Enter Username" autofocus="" required="">
			    </div>
			  </div>
              
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="pwd">Password:</label>
			    <div class="col-sm-10"> 
			      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter Password" required="">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="control-label col-sm-2" for="cpwd">Confirm Password:</label>
			    <div class="col-sm-10"> 
			      <input type="password" name="c_pass" class="form-control" id="cpwd" placeholder="Re-enter Password" required="">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="control-label col-sm-2" for="email">Email:</label>
			    <div class="col-sm-10"> 
                  <input type="email" name="email" class="form-control" id="eml" placeholder="Enter Email" required="">  
                </div>
			  </div>

			  <div class="form-group">
			    <label class="control-label col-sm-2" for="cNum">Contact Number:</label>
			    <div class="col-sm-10"> 
                  <input type="tel" name="pNum" class="form-control" id="cNum" placeholder="Enter Contact Number" required="">  
                </div>
			  </div>

			  <div class="form-group">
				  <div class="col-sm-offset-2 col-sm-10" >
				  <p>Already have an account? <a href="index.php">Log in here!</a>
				  </div>		
			  </div>

                
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" name="register" class="btn btn-default" value="submit"> Register
			      <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
			      </button>
			    </div>
			  </div>
			</form>
		</div>
	</div>
</div>

<script>
const image_input = document.querySelector("#image_input");
var uploaded_image = ""; // THIS IS A GLOBAL VARIABLE


image_input.addEventListener("change", function(){
    const reader = new FileReader(); // File reader object
    reader.addEventListener("load", () => {
        uploaded_image = reader.result;
        document.querySelector("#display_image").style.backgroundImage = `url(${uploaded_image})`;
    });

    reader.readAsDataURL(this.files[0]);
})
</script>
</body>
</html>







