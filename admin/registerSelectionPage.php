<?php 

// include('../admin/login_backend.php');

session_start();
include('../admin/connection.php');
// include('../admin/login_backend.php');
// The reason I wrote this is for good practice.


?> 

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Online Ticket Reservation</title>

		<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.min.css">

	<style>
		#regSelectLabel {
			margin-right: 20px;
		}

		select {
			width: 50%;
		}
	</style>

	</head>
	<script>
		function regSelFun() {
			var selectField = document.getElementById("registerSelector");
			var theSelectedUser = selectField.value;
			// alert(theSelectedUser); //debug purposes

			if(theSelectedUser == "hiker") {
				window.location.href="register_individual.php";
			}
			else if(theSelectedUser == "bagent") {
				window.location.href="register_bAgent.php";
			}
			else if(theSelectedUser == "sagent") {
				window.location.href="register_sAgent.php";
			}
			else if(theSelectedUser == "mguide") {
				window.location.href="register_mGuide.php";
			}
			else {
				alert("Please select a type!");
				return;
			}
		}
	</script>
<body>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<a class="navbar-brand" href="../"> Online Ticketing</a>
		<ul class="nav navbar-nav">
			<li>
				<a href="#"></a>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
	      <li><a href="../"><span class="glyphicon glyphicon-backward"></span> Return Home</a></li>
	    </ul>
	</div>
</nav>



<div class="col-md-3"></div>
<div class="col-md-6">
	<div class="panel panel-success">
		<div class="panel-heading">
			<center><h1 class="panel-title">Register</h3></center>
		</div>
		<p class="alert alert-info">
            <marquee behavior="" scrollamount="7" direction="">If you do not have an account, please register!
            </marquee>
        </p>

		<!-- <div class="panel-body">
			<form class="form-horizontal" role="form" id="form-login" action="login_backend.php" method="post">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="un">Username:</label>
			    <div class="col-sm-10">
			      <input type="text" name="username" class="form-control" id="un" placeholder="Enter Username" autofocus="" required="" value="<?php echo $uname; ?>">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="pwd">Password:</label>
			    <div class="col-sm-10"> 
			      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" required="">
			    </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" name="loginBtn" class="btn btn-default">Login
			      <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
			      </button>
			    </div>
			  </div>
			</form>
		</div> -->
		<center>
		<div class="panel-body">
			<!-- <form class="form-horizontal" role="form" id="form-login" method="post"> -->
				<div class="row-hmm">
					<div class="form-group">
						<div class="col-sm col-sm-12">
							<label id="regSelectLabel" for="regSelector">I would like to register as: </label>
							<select id="registerSelector" name="regSelector" class="form-select" aria-label="Default select example">
								<option selected>Select</option>
								<option value="hiker">Hiker</option>
								<option value="bagent">Booking Agent</option>
								<option value="sagent">Sales Agent</option>
								<option value="mguide">Mountain Guide</option>
							</select>
						</div>
					</div>
					<br>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10" >
						<p>Already have an account? <a href="index.php">Log in here!</a>
						</div>		
					</div>
					<br>
					<div class="form-group"> 
						<div class="col-sm col-sm-12">
							<button type="submit" name="loginBtn" onclick="return regSelFun()" class="btn btn-default">Proceed
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							</button>
						</div>
					</div>
					<!-- <div class="col">
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
					</div> -->
            	</div>
			<!-- </form> -->
		</div>
		</center>
	</div>
</div>
<div class="col-md-3"></div>


<!-- <?php require_once('modal/message.php'); ?> -->

<script type="text/javascript" src="../assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
	

</script>

</body>
</html>