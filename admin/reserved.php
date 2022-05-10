<?php 

// echo '<pre>';
// print_r($origins);
// echo '</pre>';
 ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Online Ticket Rerservation</title>

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
	  <li class="active">
      	<a href="#">Profile
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
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">1. PAGE ONE
								<span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
								</h3>
							</div>
							<div class="panel-body">
								SCHEDULE OF TRAVEL
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">2. PAGE TWO</h3>
							</div>
							<div class="panel-body">
								ACCOMODATION TYPE
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">3. PAGE THREE</h3>
							</div>
							<div class="panel-body">
								PAYMENT
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
			 	<center>BOOK A SCHEDULE</center>
			 </h2>
			 <div class="container-fluid">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div id="book-table"></div>
				</div>
				<div class="col-md-1"></div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>

<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../assets/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
	function showAllBook(){
		$.ajax({
				url: '../data/get_all_hike_sched.php',
				type: 'post',
				// data: {},
				success: function (data) {
					// console.log(data);
					$('#book-table').html(data);
				},
				error: function(){
					alert('Error: Cannot get data from get_all_hike_sched');
				}
			});
	}//end showAllBook
	showAllBook();

	var book_tracker;
	function deleteBook(tracker){
		// console.log(tracker);
		book_tracker = tracker;
		$('#modal-confirmation').modal('show');
	}//end deleteBook

	$('.del-book').click(function(event) {
		/* Act on the event */
		$.ajax({
				url: '../data/deleteBook.php',
				type: 'post',
				dataType: 'json',
				data: {
					tracker : book_tracker
				},
				success: function (data) {
					// console.log(data);
					$('#modal-confirmation').modal('hide');
					showAllBook();
					$('#modal-message').find('.modal-body').text(data.msg);
					$('#modal-message').modal('show');
				},
				error: function(){
					alert('Error: L87+');
				}
			});
	});//del


	function displayPassenger(tracker){
		// console.log(tracker);
		$.ajax({
				url: '../data/getPassengers.php',
				type: 'post',
				// dataType: 'json',
				data: {
					tracker : tracker	
				},
				success: function (data) {
					// console.log(data);
					$('#passenger-list').html(data);
				},
				error: function(){
					alert('Error: L113+');
				}
			});
	}//end displayPassenger

	function viewBook(tracker){
		// $('#modal-view-pass').modal('show');

		$.ajax({
				url: '../data/getBookBy.php',
				type: 'post',
				dataType: 'json',
				data: {
					tracker : tracker	
				},
				success: function (data) {
					// console.log(data);
					$('#book-by').text(data.book_by);
					$('#date').text(data.book_departure);
					$('#contact').text(data.book_contact);
					$('#address').text(data.book_address);
					$('#modal-view-pass').modal('show');
				},
				error: function(){
					alert('Error: L113+');
				}
			});
		displayPassenger(tracker);
	}//end viewBook

	function acceptPayment(){
		var counter = $('#i').val();
		var tot = 0;
		for(var i = 0; i < counter; i++){
			var name = $('#name'+i).val();
			var disc = $('#disc'+i).val();
			var price = $('#price'+i).val();
			var discounted = price * disc;
			$('#pri'+i).text(discounted);
			tot += Number(discounted);
	
		}//for loop
		$('#total').text(tot);

	}//end acceptPayment

	function addTransaction(){
		var counter = $('#i').val();
		var tot = 0;
		for(var i = 0; i < counter; i++){
			var name = $('#name'+i).val();
			var disc = $('#disc'+i).val();
			var price = $('#price'+i).val();
			var discounted = price * disc;
			$('#pri'+i).text(discounted);
			tot += Number(discounted);
				$.ajax({
	    			url: '../data/save_transaction.php',
	    			type: 'post',
	    			dataType: 'json',
	    			data: {
	    				bid : name,
	    				disc : disc
	    			},
	    			success: function (data) {
	    				console.log(data);
	    				$('#modal-view-pass').modal('hide');
	    				showAllBook();
	    				$('#modal-message').find('.modal-body').text('Transaction Save Successfully!');
	    				$('#modal-message').modal('show');
	    			},
	    			error: function(){
	    				alert('Error: L162+');
	    			}
	    		});
		}//for loop
		$('#total').text(tot);	
	}

</script>

</body>
</html>