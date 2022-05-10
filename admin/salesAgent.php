<?php
//session_start();
include('../admin/connection.php');
if(isset($_POST['submit'])){
    $route      = $_POST['route'];
    $date       = $_POST['date'];
    $capacity   = $_POST['capacity'];
	$accom      = $_POST['hotel'];
    $price_myr  = $_POST['price_myr'];
    $price_intl = $_POST['price_intl'];
    


    $sql_query = "INSERT INTO sagent_product (route, date, capacity, accom, price_myr, price_intl) VALUES ('$route', '$date', '$capacity', '$accom', '$price_myr', '$price_intl')";
    $result=mysqli_query($con,$sql_query);

    if($result){
        header('location:salesAgent.php');
    }
    else{
        die(mysqli_error($con));
    }

}
?>

 <!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Sales Agent Panel </title>

		<!-- Bootstrap CSS -->
   	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.min.css">

     <!-- Custom CSS -->
    <link href="../assets/css/simple-sidebar.css" rel="stylesheet">
    <link href="../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	</head>
<body>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Online Ticketing Sales Agent Panel</a>
		<ul class="nav navbar-nav">
			<li class="active"><a href="salesAgent.php">Add new Schedule
			<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
			</a></li>
			<li class=""><a href="sAgent_datatables.php">Configure Schedule
			<span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
			</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
	      <li><a href="../admin/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
	    </ul>
	</div>
</nav>
<br />


<div class="form">
    <center><h3 style="margin-left: 5px;"> Add new Hiking Schedule  <span class="glyphicon glyphicon-road" aria-hidden="true"> </h3></center>
	<div class="panel-body">
			<form class="form-horizontal" role="form" id="form-login" method="POST">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="un">Route:</label>
			    <div class="col-sm-10">
				<select class="form-control" id="routeTrail" name="route">
					<option value="Via Ferrata">Via Ferrata</option>
					<option value="Ranau trail">Ranau Trail</option>
					<option value="Kota Belud trail">Kota Belud trail</option>
				</select>
			    </div>
			  </div>
			 
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="pwd">Date:</label>
			    <div class="col-sm-10"> 
			      <input type="date" name="date" class="form-control" id = "dateInput" required="">
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="pwd">Capacity / Slots:</label>
			    <div class="col-sm-10"> 
			      <input type="number" name="capacity" class="form-control" placeholder="Enter number of slots" required="">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="control-label col-sm-2" for="pwd">Accommodation:</label>
			    <div class="col-sm-10"> 
				<select class="form-control" id="hotel" name="hotel">
					<option value="Suria Rooms">Suria Rooms</option>
					<option value="Aki House">Aki's House</option>
					<option value="Rumah Si Gaman">Rumah Si Gaman</option>
				</select>			      
			    </div>
			  </div>

			  <!-- Add price for international and local. The price should be different inputs not radio input -->
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="price">Pricing (Malaysian):</label>
			    <div class="col-sm-10"> 
					<input type="text" name="price_myr" class="form-control" id="price" placeholder="Enter price number (MALAYSIAN)" required="">
			    </div>
			  </div>


			  <div class="form-group">
			    <label class="control-label col-sm-2" for="price">Pricing (International):</label>
			    <div class="col-sm-10"> 
			      <input type="text" name="price_intl" class="form-control" id="price" placeholder="Enter price number (INTERNATIONAL)" required="">
			    </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" name="submit" class="btn btn-default">ADD
			      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
			      </button>
			    </div>
			  </div>
			</form>
		</div>
</div>

<script type="text/javascript" src="../assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../assets/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">

</script>

</body>
</html>