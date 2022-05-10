<?php
session_start();
include('../admin/connection.php');
// The reason I wrote this is for good practice.
$db = mysqli_connect('localhost', 'root', '', 'kinabalu5');

// variable declaration
$uname = "";
$email    = "";
$errors   = array(); 


// call the register() function if register_btn is clicked
if (isset($_POST['register'] )) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $uname, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$uname       =  $_POST['username']; //Get username
    $pass        =  $_POST['password']; //Get password
    $c_pass      =  $_POST['c_pass'];   //Get Confirm Password
	$email       =  $_POST['email'];    //Get email
	$phonenum    =  $_POST['pNum'];     //Get phone num
    $cert_bg     =  $_FILES['agCert']['name'];
	$company     =  $_POST['com_name'];
    $agency      =  $_POST['agname'];


    // Image file directory
    $target = "../image_upload/".basename($cert_bg);
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    echo "test variable pass <br><br>";
	// form validation: ensure that the form is correctly filled
	if (empty($uname)) {
        echo "test username fail <br><br>"; 
		array_push($errors, "Username is required"); 
	}
	if (empty($email)) { 
        echo "test email fail <br><br>"; 
		array_push($errors, "Email is required"); 
	}
	if (empty($phonenum)) { 
        echo "test phone number fail <br><br>"; 
		array_push($errors, "Phone number is required"); 
	}
	if (empty($pass)) { 
        echo "test password fail <br><br>"; 
		array_push($errors, "Password is required"); 
	}
    if (empty($cert_bg)) { 
        echo "test certificate fail <br><br>"; 
		array_push($errors, "Certificate is required"); 
	}
    if (empty($company)) { 
        echo "test company fail <br><br>"; 
		array_push($errors, "Company is required"); 
	}
    if (empty($agency)) { 
        echo "test agency fail <br><br>"; 
		array_push($errors, "agency is required"); 
	}
	if ($pass != $c_pass) {
        echo "test matching password fail <br><br>"; 
		array_push($errors, "The two passwords do not match");
	}
    	if ($pass != $c_pass) {
        echo "test matching password fail <br><br>"; 
		array_push($errors, "The two passwords do not match");
	}

	
	// Certificate uploads here:

	$user_check_query = "SELECT * FROM bagent_account WHERE (bAgent_name='$uname' OR bAgent_email='$email')";
	$result = mysqli_query($db, $user_check_query);
	
    echo " test user check query pass <br><br>";
	if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo " test check mysqli num rows pass <br><br>";
        $user = mysqli_fetch_assoc($result);
        if ($uname===$user['bAgent_name'])
        {
            echo " test check username exist fail <br><br>";
            array_push($errors, "Username already exists");
        }
        else
        {
            echo " test check email exist fail <br><br>";
            array_push($errors, "email already exists");
        }  
	} 

    echo " test all user check query pass <br><br>";
    echo "Count error = ".count($errors)."<br><br>";
		// register user if there are no errors in the form
	if (count($errors) == 0) {
		$pass = md5($pass);//encrypt the password before saving in the database

		echo " test password encrypt pass <br><br>";




		//Insert data into this table "admin_accounts" 
		$query = "INSERT INTO bAgent_account (bAgent_name, bAgent_pword, bAgent_email, user_type, bAgent_cNum, agname, comname, cert_img) 
					VALUES('$uname', '$pass','$email', 'booking agent', '$phonenum', '$agency', '$company', '$cert_bg')";
		echo " test user check query pass <br><br>";
		//echo mysqli_query($db, $query);
        $test = mysqli_query($db, $query);
        if (move_uploaded_file($_FILES['agCert']['tmp_name'], $target)) {
            echo "Certificate uploaded successfully";
        }else{
            echo "Certificate uploaded failed";
        }
        echo " test mysqli_query <br><br>".$test;
		// get id of the created user
		$logged_in_user_id = mysqli_insert_id($db);

		$_SESSION['bookingAgent'] = getUserById($logged_in_user_id); // put logged in user in session
		$_SESSION['success']  = "You are now logged in";
		header('location: firstPage.php');	
		

	}
	
}
// return hiker array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM bagent_account WHERE bAgent_ID=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
/*
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}
*/
function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}
function isLoggedIn()
{
	if (isset($_SESSION['bookingAgent'])) {
		return true;
	}else{
		return false;
	}
}
// Logout
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['bookingAgent']);
	header("location: login.php");
}

// Login
if (isset($_POST['login'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $uname, $errors;

	// grap form values
	$uname = e($_POST['uname']);
	$pass = e($_POST['pass']);

	// make sure form is filled properly
	if (empty($uname)) {
		array_push($errors, "Username is required");
	}
	if (empty($pass)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$pass = md5($pass);

		$query = "SELECT * FROM users WHERE username='$uname' AND password='$pass' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['bookingAgent'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: adminHomepage.php');		  
			}else{
				$_SESSION['bookingAgent'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: userHomepage.php');
			}
		}else {
			array_push($errors, "Wrong username & password combination");
		}
	}
} 