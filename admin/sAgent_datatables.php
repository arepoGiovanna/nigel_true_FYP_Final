<?php
include 'connection.php';
$connect = mysqli_connect("localhost", "root", "", "kinabalu5");
$query = "SELECT route,date,capacity,accom,price_myr,price_intl FROM sagent_product";
$result = mysqli_query($connect, $query) or die( mysqli_error($connect));
//$result = $connect-> query($sql);
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Sales Agent Panel </title>


    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet"/>

    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" rel="stylesheet">    
	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->

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
			<li class=""><a href="salesAgent.php">Add new Schedule
			<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
			</a></li>
			<li class="active"><a href="sAgent_datatables.php">Configure Schedule
			<span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
			</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
	      <li><a href="../admin/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
	    </ul>
	</div>
</nav>

<div class="container" style="margin-top:3em">
	
    <h3 align="center" >Product List</h3>


    <hr />
    <div class="table-responsive">
        <table id="product_data" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <!---<th><input type="checkbox" id="bulk_dlt" /><button id="dlt_trigger">Delete</button></th>--->
                    <th>ID</th>
                    <th>Route name</th>
                    <th>Date</th>
                    <th>Capacity</th>
                    <th>Accommodation</th>
                    <th>Price (MALAYSIAN)</th>
                    <th>Price (INTERNATIONAL)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <?php
            //include 'fetch_data.php';
            $products = mysqli_query($connect,"SELECT * FROM sagent_product");
            while($row = mysqli_fetch_array($products))
            {
                echo"
                         <tr>
                            
                            <th scope='row'>" .$row['routeID']."</th>
                            <td>" .$row['route']."</td>
                            <td>" .$row['date']."</td>
                            <td>" .$row['capacity']."</td>
                            <td>" .$row['accom']."</td>
                            <td>" .$row['price_myr']."</td>
                            <td>" .$row['price_intl']."</td>
               			    <td>
               			        <div class='dropdown'>
                                   <button class='btn btn-primary btn-sm dropdown-toggle' type='button' id='dLabel' data-bs-toggle='dropdown' aria-expanded='false'></button>
                                   <ul class='dropdown-menu' aria-labelledby='dLabel'>
                                       <li><a class='dropdown-item' href='updateProduct.php?updateid=" .$row['routeID']."'>Update</a></li>
                                       <li><a onclick='javascript:confirmationDelete($(this));return false;'  class='dropdown-item' href='deleteSagentPro/deleteProduct.php?deleteid=" .$row['routeID']."'>Delete</a></li>

                                   </ul>
    
               			        </div>
                            </td>                          
                          </tr>
                      ";
            }
            ?>


        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#product_data').DataTable();

    });
</script>

<script>
    function confirmationDelete(anchor)
    {
        var conf = confirm('Are you sure want to delete this product?');
        if(conf)
            window.location=anchor.attr("href");
    }</script>

</body>
</html>
