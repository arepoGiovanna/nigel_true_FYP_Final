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
		<link rel="stylesheet" href="../admin/css/table.css">
		<title>Profile</title>
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


        <!-- insert here -->
        <div id="mainContainer">
            <!-- insert here... -->
            <!-- <center><p>Hello World!</p></center> -->
            <div id="firstBody">
                <center>
                    <h2>Profile</h2>
                    <hr id="horiLine1">
                    <?php require "../admin/profileBackend/profile_backend.php"; ?>
                </center>
            </div>
        </div>


    

</body>
</html>