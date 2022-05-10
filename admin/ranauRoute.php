<?php
// include('login_register_hiker.php');

// if (!isLoggedIn()) {
// 	$_SESSION['msg'] = "You must log in first";
// 	header('location: login.php');
// }


//include "../admin/processor/assignMguide.php";

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

						<center>
						<label for="">Please select Route:</label>
						<select id="route-id" class="btn btn-default" name="" onchange="javascript:location.href = this.value;">
							<option value="None" >-- Select -- </option>
							<option value="firstPage.php">Via Ferrata Route</option>
							<option value="ranauRoute.php" selected>Ranau Route</option>
							<option value="kBeludRoute.php">Kota Belud Route</option>

						</select>
						</center>

					   <!-- <select class="btn btn-default" id="route-id">
							<option value="None" >-- Select -- </option>
							<option value="1" selected>Ranau Route</option>
							<option value="2">Kota Belud Route</option>
							<option value="3">Via Ferrata Route</option>
					    </select> -->
						<br><br>

						
					  </div>
					   

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
				<center><img src="../images/ranauRoute.jpg" alt="Map of Via Ferrata" width="500" height="300"></center>
			<hr> 
			<h3 style="text-align: center; font-size: 25px;">Difficulty:</h3>
				<center><img src="../images/5star.png" alt="5 star rating" width="150" height="250"></center>
				<hr>
			<h2>
			 	<center>BOOK A SCHEDULE (Ranau Route)</center>
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
					<div class="col-md-12">
						<div class="d-flex justify-content-center">
							<center>
							<?php
							$query = 'SELECT * FROM sagent_product WHERE route="Ranau trail"';
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
									<!--MODAL  -->
										<!-- Trigger open modal -->
										<button id="myBtn" class="btn" onclick="turnVisible('#myModal')" >Book</button> </td>
							
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




<form class="form-horizontal" role="form" id="form-itinerary" method="post">
<!-- The Modal -->
<div id="myModal" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
		<div class="modal-header">
			<span class="close">&times;</span>
			<h2>Book Here</h2>
		</div>
		<div class="modal-body">
			<!-- Note that if you want to connect to database, always put the "name" attribute to $_POST -->
			<!-- Full name -->
			<div class="form-group">
					<label class="control-label col-sm-2" for="un">Full name:</label>
						<div class="col-sm-10">
							<input type="text" name="name" class="form-control" id="un" placeholder="Enter Username" autofocus="" required=""><br>
					
						</div>
					</div>

			<!-- Email -->
			<div class="form-group">
					<label class="control-label col-sm-2" for="email">Email:</label>
					<div class="col-sm-10"> 
					<input type="email"class="form-control" name="email" id="eml" placeholder="Enter Email" required="">  
				</div>
				</div>
				<br>
			<!-- Contact number -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="tel">Contact number:</label>
					<div class="col-sm-10"> 
						<input type="tel" name="phoneNum" class="form-control" id="tel" placeholder="Enter Contact Number" required="">  
					</div>
				</div>
				<br>
				<!-- Address -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Address:</label>
					<div class="col-sm-10"> 
						<input type="text"class="form-control" name="address" id="add" placeholder="Enter address" required="">  
					</div>
				</div>
				<br>
				<!-- No. of hikers -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">No. Hikers (Malaysian):</label>
					<div class="col-sm-10"> 
					<input type="number" name="myrNo" class="form-control" placeholder="Enter number of hikers" required="">
					</div>
				</div>
				<br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">No. Hikers (International):</label>
					<div class="col-sm-10"> 
					<input type="number" name="intlNo" class="form-control" placeholder="Enter number of hikers" required="">
					</div>
				</div>
				<br>
					
		</div>
		<div class="modal-footer">
			<div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10">
				<!-- <button type="submit" class="btn btn-info" name ="submit" id="submit"> Submit
				<span class="glyphicon glyphicon-check" aria-hidden="true"></span> 
				</button> -->
				<a class="btn btn-primary btn-lg active" name="submit" href="../admin/selectMguide.php" role="button" aria-pressed="true">Submit</a>
				<!-- <input type="submit" class="btn btn-info" value="Submit" name="submit" href="../admin/processor/assignMguide.php">SUBMIT</input> -->
				<!-- <input type="submit" class="btn btn-info" value="Submit" name="submit" href="../admin/selectMguide.php">SUBMIT</input> -->
				</div>
			</div>
		</div>
	</div>

</div>
<!--MODAL  END-->

</form>
<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../assets/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



function turnVisible(tag){

	if ($(tag).css("display")=="none") {
	$(tag).css("display","block");
	}
}
//turn a selected css tag display to hidden
function turnHidden(tag){
	if ($(tag).css("display")=="block") {
	$(tag).css("display","none");
	}

}

</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>