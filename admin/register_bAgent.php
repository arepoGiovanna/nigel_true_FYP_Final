<?php include('../admin/log_reg_bAgent.php');?>
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
		<!-- <ul class="nav navbar-nav">
      <li><a href="index.php">Login here</a></li> -->

      <!-- Modal for Choosing register page -->
      <!-- <li><a href="#loginRegisterModal" data-toggle="modal" onclick="topFunction()">Register</a></li>
  
		</ul> -->
		<ul class="nav navbar-nav navbar-right">
	      <li><a href="../"><span class="glyphicon glyphicon-backward"></span> Return Home</a></li>
	    </ul>
	</div>


</nav>

<!-- Modal for chooseRegister starts here -->
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
        Are you an existing user?<br><br> If you are, please login. Else, please click on register. <br><br> Or if you want to skip, you can directly book.
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-info" onclick="bookFunc()">Book</button>
        <button type="submit" class="btn btn-warning" onclick="regFunc()">Register</button>
        <button type="button" class="btn btn-primary" onclick="loginFunc()">Login</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal for chooseRegister ends here here -->

<div class="signup-page">
    <div class="form">
        <center><h2>Create Account as Booking Agent</h2></center>
        <br>
        <p class="alert alert-info">
            <marquee behavior="" scrollamount="10" direction="">Please register your PERSONAL details and your AGENCY details before proceeding to book hiking slots.
            </marquee>
        </p>
        <div class="dropdown">

        <div class="panel-body">
      <!-- Register form must be in this body -->
			<form action="register_bAgent.php" class="form-horizontal" role="form" id="form-login" method="POST" enctype="multipart/form-data">
                <strong><h3>Agency Details</h3></head></strong>

                <!-- Agency Name -->
                <div class="form-group">
                    <label class="control-label col-sm-2" for="agname">Agency Name:</label>
                    <div class="col-sm-10">
                        <input type="text" name="agname" class="form-control" id="agname" placeholder="Enter Your Travel Brand" autofocus="" required="">
                    </div>
                </div>

                <!-- Company Name -->
                <div class="form-group">
                    <label class="control-label col-sm-2" for="comName">Official Company Name:</label>
                    <div class="col-sm-10">
                        <input type="text" name="com_name" class="form-control" id="comName" placeholder="Enter Your Travel Brand" autofocus="" required="">
                    </div>
                </div>

                <!-- Upload Agency Cert -->
                <div class="form-group">
                    <label class="control-label col-sm-2" for="agCert">Upload Agency Certificate:</label>
                    <div class="col-sm-10"> 
                        <input name="agCert" type="file" id="image_input" > 
                         <!-- accept="image/png, image/jpg" -->
                        <div id="display_image">

                        </div>

                        <!--<button onclick="clearImage()" class="btn btn-primary btn-md mt-3">Clear Image</button>-->
                    </div>
                </div>

            <hr> <!-- Straight line border -->

            <strong><h3>Personal Details</h3></head></strong>
            <!-- Username -->
            <div class="form-group">
              <label class="control-label col-sm-2" for="un">Username:</label>
              <div class="col-sm-10">
                <input type="text" name="username" class="form-control" id="un" placeholder="Enter Username" autofocus="" required="">
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

            <!-- Email -->
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-10"> 
                      <input type="email" name="email" class="form-control" id="eml" placeholder="Enter Email" required="">  
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
                <button type="submit" name ="register" class="btn btn-default"> Register
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







