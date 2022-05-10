<?php
// include('login_register_hiker.php');

// if (!isLoggedIn()) {
// 	$_SESSION['msg'] = "You must log in first";
// 	header('location: login.php');
// }

session_start();


?>
<!DOCTYPE html>
<html lang="">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Online Ticket Rerservation</title>
				<!-- DRIFT CHATBOX -->

		<!-- Start of Async Drift Code -->
		<script>
		// "use strict";

		// !function() {
		// var t = window.driftt = window.drift = window.driftt || [];
		// if (!t.init) {
		// 	if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
		// 	t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
		// 	t.factory = function(e) {
		// 	return function() {
		// 		var n = Array.prototype.slice.call(arguments);
		// 		return n.unshift(e), t.push(n), t;
		// 	};
		// 	}, t.methods.forEach(function(e) {
		// 	t[e] = t.factory(e);
		// 	}), t.load = function(t) {
		// 	var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
		// 	o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
		// 	var i = document.getElementsByTagName("script")[0];
		// 	i.parentNode.insertBefore(o, i);
		// 	};
		// }
		// }();
		// drift.SNIPPET_VERSION = '0.3.1';
		// drift.load('x624zthai9fy');
		</script>
		<!-- End of Async Drift Code -->
		<!-- END DRIFT CHATBOX -->

		<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../admin/css/table.css">
	<link rel="stylesheet" href="../admin/css/bsCDN.php">
	<style>
	img {
		max-width: 100%;
		height: auto;
	}
	</style>

	</head>
<body style="background-color: lightblue;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> Online Ticketing</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">
      	<a href="#">Rerservation
      	<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
      	</a>
      </li>
	  <li class="">
      	<a href="profile.php">Profile
      	<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
      	</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-backward"></span> Back To Home</a></li>
    </ul>
  </div>
</nav>


<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">STEPS FOR BOOKING</h3>
			</div>
			
			<div class="panel-body">
				<div class="row">
					<div class="col">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">1. Choose your route & schedule
								<span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
								</h3>
							</div>
							<div class="panel-body">
								SCHEDULE OF Hiking
							</div>
						</div>
					</div>
					<!-- <div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">2. Choose Schedule</h3>
							</div>
							<div class="panel-body">
								ACCOMODATION TYPE
							</div>
						</div>
					</div> -->
					<div class="col">
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">2. MT GUIDE INFO</h3>
							</div>
							<div class="panel-body">
								PASSENGER DETAILS
							</div>
						</div>
					</div>
					<div class="col">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h3 class="panel-title">4. PAYMENT INFO</h3>
							</div>
							<div class="panel-body">
								TOTAL PAYMENT
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="col-md-1"></div>
</div>


<div class="container-fluid">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center>Please select Route</center>
			 </h2>
				<div class="container-fluid">
					<form class="form-horizontal" role="form" id="form-itinerary">
					  <div class="form-group">
					    <label for="">Please select Route:</label>

						<select id="route-id" class="btn btn-default" name="" onchange="javascript:location.href = this.value;">
							
							<option value="https://www.yahoo.com/" selected>Option1</option>
							<option value="https://www.google.co.in/">Option2</option>
							<option value="https://www.gmail.com/">Option3</option>

						</select>
					   <!-- <select class="btn btn-default" id="route-id">
							<option value="None" >-- Select -- </option>
							<option value="1" selected>Ranau Route</option>
							<option value="2">Kota Belud Route</option>
							<option value="3">Via Ferrata Route</option>
					    </select> -->
						<br><br>
						<center>
						<button type="button" class="btn btn-primary ml-3 mt-3" data-toggle="collapse" href="#detailTable" aria-expanded="false" aria-controls="detailTable" onclick="getSelectedRoute()">Show/ Hide</button>
						</center>

						
					  </div>
					   
					  
					  <button type="submit" class="btn btn-success"href="admin/secondPage.php">NEXT
					  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
					  </button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>



<div class="container-fluid" >
	<div class="col-md-4" ></div>
	<div class="col-md-4" id="bookingPanel">
		<div class="panel panel-default">
			<div class="panel-body" >
				<center><img src="../images/via_ferrata.png" alt="Map of Via Ferrata" width="1000" height="300"></center>
			<hr> 
			<h2>
			 	<center>BOOK A SCHEDULE (Via Ferrata)</center>
			 </h2>
			 <div class="container-fluid"  >
				<div class="col-md-1">
					1 1
				</div>
				<div class="col-md-10" id="table1">
					<div id="book-table">
						1 2
					</div>
				</div>
				<div class="col-md-1">

				</div>
				</div>
				<?php include("../admin/connection.php");?>
					<div class="col-md-8">
						<div class="d-flex justify-content-center">
							<center>
							<?php
							$query = 'SELECT * FROM sagent_product WHERE route="Via Ferrata"';
							$stmt = $con->prepare($query);
							$stmt->execute();
							$result = $stmt->get_result();
							?>
							
							<table class="table table-striped" id="data-table" style="width:100%">
							
							<thead>
								<tr>
								<th>Date</th>
								<th>Capacity</th>
								<th>Accommodation</th>
								<th>Price (Myr)</th>
								<th>Price (Intl)</th>
								<th>action</th>
								</tr>
							</thead>
							<tbody>


								<?php while ($row = $result->fetch_assoc()) { ?>
								<tr>
								<td><?= $row['date']; ?></td>
								<td><?= $row['capacity']; ?></td>
								<td><?= $row['accom']; ?></td>
								<td><?= $row['price_myr'];?></td>
								<td><?= $row['price_intl']; ?></td>
								<td>
									<!-- <a href="deleteAdmin/editDeleteBagent.php?delete=<?= $row['bAgent_ID']; ?>" class="badge bg-danger p-2" onclick="return confirm('Do you want delete this record?');">Delete</a> |
									<a href="editUser.php?edit=<?= $row['bAgent_ID']; ?>" class="badge bg-success p-2">Edit</a> -->
								</td>
								</tr>
								<?php } ?>
							</tbody>
							</table>
							</center>

						</div>
					</div>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>

<!-- Collapse menu -->

<div class="collapse" id="detailTable" style="background-color: white;">
	<div class="container mx-auto p-3" >
<!--
	<div class="row">
			<p id="testing" class="mx-auto">This is what you've entered!</p>
		</div>
-->
		<div class="row">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th scope="col">Route Name</th>
							<th scope="col">Difficulty level</th>
							<th scope="col">Itineraries</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" id="result"> Name </th>
							<td id="resultLvl">Name</td>
							<td id="resultDesc"></td>
						</tr>
	

					</tbody>
				</table>

			<p>
		</div>
	</div>
</div>




<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../assets/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
	// Get selected object
	document.getElementById("route-id").selectedIndex = 3;

	function getSelectedRoute(){
		document.getElementById("route-id").selectedIndex = 3;
		var routeName = document.getElementById("route-id"); //Get route name

		// Get route difficulty
		var diffRoute1 = "6";
		var diffRoute2 = "4";
		var diffRoute3 = "10";

		var routeImage; // Get route image
		var routeDesc;  // Get route description

		// Get the route name

		
		var result = routeName.options[routeName.selectedIndex].text;

		// Write the value in the collapse

		document.getElementById("result").innerHTML = result;

		if(routeName == "1"){
			document.getElementById("resultLvl").innerHTML = diffRoute1;
			return;
		}
		// document.getElementById("resultLvl").innerHTML = diffRoute1;
		// document.getElementById("resultLvl").innerHTML = diffRoute2;
		// document.getElementById("resultLvl").innerHTML = diffRoute3;

	




	}
	
/*
	
	// get values from every input fields -->
	function submitButton() {
		//var to store all input fields values 
		var nameVar;
		var emailVar;
		var passwordVar;
		var birthdayVar;
		var genderVar;
		
		// obtain all values 
		nameVar = document.getElementById("nameInput").value;
		emailVar = document.getElementById("emailInput").value;
		passwordVar = document.getElementById("passInput").value;
		birthdayVar = document.getElementById("birthdayInput").value;
		
		genderVar = document.getElementsByName("gender");
		for (var i = 0, length = genderVar.length; i < length; i++) {
			if (genderVar[i].checked) {
				// do whatever you want with the checked radio
				genderVar = (genderVar[i].value);
			}
		}
		
		//check whether null values
		if(nameVar == "" || emailVar == "" || passwordVar == "" || birthdayVar == "" || genderVar == "" ) {
			window.alert("Please insert all values!");
			return;
		}
		
		// write all the values into the table -->
		document.getElementById("nameRow").innerHTML = nameVar;
		document.getElementById("emailRow").innerHTML = emailVar;
		document.getElementById("passRow").innerHTML = passwordVar;
		document.getElementById("birthdayRow").innerHTML = birthdayVar;
		document.getElementById("genderRow").innerHTML = genderVar;
		
		//testing purposes
		//to make sure that the script are correctly done
		//window.alert("Script is fine :)");
		
		//finally, show them
		
	}
	
	//clear every fields
	function resetButton() {
		document.getElementById("nameRow").innerHTML = "";
		document.getElementById("emailRow").innerHTML = "";
		document.getElementById("passRow").innerHTML = "";
		document.getElementById("birthdayRow").innerHTML = "";
		document.getElementById("genderRow").innerHTML = "";
		
		document.getElementById("nameInput").value = "";
		document.getElementById("emailInput").value = "";
		document.getElementById("passInput").value = "";
		document.getElementById("birthdayInput").value = "";
		document.getElementById("genderInput").value = "";
	}
*/
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>