


<?php

//session_start();
//$prod_id = intval($_GET["id"]);
include "../admin/connection.php";
$con = mysqli_connect('localhost','root','','kinabalu5');	
$sql = 'SELECT * FROM sagent_product WHERE route="Via Ferrata"'; 
$result  = mysqli_query($con,$sql);

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

.btn{
background-color: #4CAF50; /* Green */
border: none;
color: white;
padding: 10px 20px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 12px;
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
                        <h3 class="panel-title">3. MT GUIDE INFO</h3>
                    </div>
                    <div class="panel-body">
                        PASSENGER DETAILS
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">3. PAYMENT INFO</h3>
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



<div class="via-ferrata section">
<div class="container-fluid" >
<div class="col-md-4" ></div>
<div class="col-md-4" id="bookingPanel">
    <div class="panel panel-default">
        <div class="panel-body" >

        <h2>
            <center>CHOOSE MOUNTAIN GUIDE</center>
        </h2>

        
        <div class="container-fluid"  >
            <div class="col-md-1">
            </div>
            <div class="col-md-10" id="table1">
                <div id="book-table">
                    
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
                        $query = 'SELECT * FROM mguide_account';
                        $stmt = $con->prepare($query);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        ?>
                        
                        <table class="table table-striped" id="data-table" style="width:100%">
                        
                        <thead>
                            <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Climb Exp</th>
                            <th>action</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr name="slot">
                                <td><?= $row['mguide_uname']; ?></td>
                                <td><?= $row['mguide_email']; ?></td>
                                <td><?= $row['mguide_phone'];?></td>
                                <td>Lvl. <?= $row['experience']; ?></td>
                                <td>
                                <!--MODAL  -->
                                    <!-- Trigger open modal -->
                                    <button id="myBtn" class="btn" action="../admin/payment.php" >Assign</button> 
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
</div>






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

































// Ajax code to get the input of the user

// Code is taken from KY's code, indiv-product.php. 
// $(document).ready(function(){
// 	$(".via-ferrata .booked .button1 .btn" ).click(function(){
// 		$.post(window.location, {
// 		// 	confirm("it works!");
// 			pd_size : $('input[name="size"]:checked').val(),
// 			pd_quantity : $('input[name="quantity"]').val(),
// 		},function(data) {
// 			showPopup();
// 		})
    
// 	});
// });




// function success() {
//   confirm("Booked successfully!");
//}
// $.ajax({
// 					url: 'data/session_itinerary.php',
// 					type: 'post',
// 					dataType: 'json',
// 					data: {
// 						oid : origin,
// 						did : dest,
// 						dd : dept
// 					},
// 					success: function (data) {
// 						console.log(data);
// 						if(data.valid == true){
// 							window.location = data.url;
// 							console.log('sss');
// 						}
// 					},
// 					error: function(){
// 						alert('Error: L161+');
// 					}
// 				});
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>