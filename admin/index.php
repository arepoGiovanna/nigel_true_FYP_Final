<?php 

// include('../admin/login_backend.php');

session_start();

//show message if any login errors
if(isset($_SESSION["errorMsg"])) {
    echo "<script> alert('".$_SESSION["errorMsg"]."'); </script>";
    //then unset, so that error doesnt popup everytime page loads
    unset($_SESSION["errorMsg"]);
}

include('../admin/connection.php');
// include('../admin/login_backend.php');
// The reason I wrote this is for good practice.

?>

<script>
	//used for the session
	var theSelectedUser; //global variable
</script>

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

	</head>
<body>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<a class="navbar-brand" href="../"> Online Ticketing</a>
		<ul class="nav navbar-nav">
			<li>
				<a href="registerSelectionPage.php">Register here</a>
			</li>
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
			<center><h1 class="panel-title">Login</h3></center>
		</div>
		<p class="alert alert-info">
            <marquee behavior="" scrollamount="7" direction="">If you do not have an account, please register!
            </marquee>
        </p>

		<div class="panel-body">
			<form class="form-horizontal" role="form" id="form-login" action="login_backend.php" method="post">
				<div class="form-group">
					<label class="control-label col-sm-2" for="un">Username:</label>
					<div class="col-sm-10">
					<!-- <input type="text" name="username" class="form-control" id="un" placeholder="Enter Username" autofocus="" required="" value="<?php //echo $uname; ?>"> -->
					<input type="text" name="username" class="form-control" id="un" placeholder="Enter Username" autofocus="" >
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Password:</label>
					<div class="col-sm-10"> 
						<input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" >
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<label id="regSelectLabel" class="control-label col-sm-2" for="regSelector">Login as a: </label>
						<select id="registerSelector" name="regSelector" class="form-select col-sm-4" aria-label="Default select example">
							<option value="" selected>Select</option>
							<option value="hiker">Hiker</option>
							<option value="bagent">Booking Agent</option>
							<option value="sagent">Sales Agent</option>
							<option value="mguide">Mountain Guide</option>
							<option value="admin">Admin</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10" >
						<p>Don't have an account? <a href="registerSelectionPage.php">Register here!</a>
						</div>		
				</div>
				
				<div class="form-group"> 
					<div class="col-sm-offset-5 col-sm-12">
						<button type="submit" name="loginBtn" onclick="return sds()" class="btn btn-default">Login
						<span class="glyphicon glyphicon-check" aria-hidden="true"></span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="col-md-3"></div>


<!-- <?php require_once('modal/message.php'); ?> -->

<script type="text/javascript" src="../assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
	//event onclick on login button
	function checkInput() {
		var unameField = document.getElementById("un").value;
		var pwdField = document.getElementById("pwd").value;
		var selectInput = document.getElementById("registerSelector").value;

		//var selectInput123 = document.getElementById("registerSelector");
		//var theSelect = selectInput123.options[selectInput123.selectedIndex].text;

		if(unameField == "" || pwdField == "" || selectInput == "") {
			alert("Please fill all inputs!");
			return false;
		}
}
</script>

</body>
</html>