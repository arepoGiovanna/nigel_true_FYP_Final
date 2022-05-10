<?php
// include('login_register_function.php');
// if (!isLoggedIn()) {
// 	$_SESSION['msg'] = "You must log in first";
// 	header('location: login.php');
// }
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		<link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" rel="stylesheet">
		<link href="./css/profile.css" rel="stylesheet"> -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.min.css">

        <!-- Custom CSS -->
        <link href="../assets/css/simple-sidebar.css" rel="stylesheet">
        <link href="../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="css/style.css">

		<title>Profile</title>
	</head>
	<body>

    <nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<a class="navbar-brand" href="checkAdmin.php">Admin Panel</a>
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

	
	 
	<div class="container">
		<div class="col-md-12">
			<div class="row d-flex justify-content-center">
				<div class="col-md-6 shadow-sm" style="margin-top:100px;">
					<h3 class="text-center my-3">My Profile</h3>
						<div class="about-border"></div>
						<!-- logged in user information -->
						<div class="profile_info">
							<table class="table table-bordered">
								 <tr>
									<th>User Name</th>
									<td><?php  if (isset($_SESSION['user'])) : ?>
										<?php echo $_SESSION['user']['username']; ?>

										<small>
											<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
										</small>

									<?php endif ?>
									</td>
								 </tr>
								 <tr>
									<th>Email</th>
									<td><?php  if (isset($_SESSION['user'])) : ?>
										<?php echo $_SESSION['user']['email']; ?>

									<?php endif ?>
									</td>
								 </tr>
								 <tr>
									<th>Address</th>
									<td><?php  if (isset($_SESSION['user'])) : ?>
										<?php echo $_SESSION['user']['address']; ?>

									<?php endif ?>
									</td>
								 </tr>
								 <tr>
									<th>Phone Number</th>
									<td><?php  if (isset($_SESSION['user'])) : ?>
										<?php echo $_SESSION['user']['phone_num']; ?>

									<?php endif ?>
									</td>
								 </tr>
							</table>
						</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>