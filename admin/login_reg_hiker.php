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
if (isset($_POST['register'])) {
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
	
	echo "all vars good <br><br>";
	// form validation: ensure that the form is correctly filled
	if (empty($uname)) { 
		echo "uname not working";
		array_push($errors, "Username is required"); 
	}
	if (empty($email)) { 
		echo "email not working";
		array_push($errors, "Email is required"); 
	}
	if (empty($phonenum)) { 
		echo "phonenum not working";
		array_push($errors, "Phone number is required"); 
	}
	if (empty($pass)) { 
		echo "password not working";
		array_push($errors, "Password is required"); 
	}
	if ($pass != $c_pass) {
		echo "same not working";
		array_push($errors, "The two passwords do not match");
	}

	
	$user_check_query = "SELECT * FROM hiker_account WHERE (hikerUname='$uname' OR hikerEmail='$email')";
	$result = mysqli_query($db, $user_check_query);
	
   echo "all select good<br><br>";
	if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $user = mysqli_fetch_assoc($result);
        if ($uname===$user['hikerUname'])
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
		//Insert data into this table "hiker_accounts" 
		$query = "INSERT INTO hiker_account (hikerUname, hikerPword, hikerEmail, user_type, hiker_pNum) 
					VALUES('$uname', '$pass','$email', 'hiker', '$phonenum')";
		echo " test user check query pass <br><br>";
		$test = mysqli_query($db, $query);

		// get id of the created user
		$logged_in_user_id = mysqli_insert_id($db);

		$_SESSION['hiker'] = getUserById($logged_in_user_id); // put logged in user in session
		$_SESSION['success']  = "You are now logged in";

		header('location: firstPage.php');	
		

	}
	
}


// return hiker array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM hiker_account WHERE hikerID=" . $id;
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
	if (isset($_SESSION['hiker'])) {
		return true;
	}else{
		return false;
	}
}
// Logout
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['hiker']);
	header("location: login.php");
}

// // Login
// if (isset($_POST['login'])) {
// 	login();
// }

// // LOGIN USER
// function login(){
// 	global $db, $uname, $errors;

// 	// grap form values
// 	$uname = e($_POST['uname']);
// 	$pass = e($_POST['pass']);

// 	// make sure form is filled properly
// 	if (empty($uname)) {
// 		array_push($errors, "Username is required");
// 	}
// 	if (empty($pass)) {
// 		array_push($errors, "Password is required");
// 	}

// 	// attempt login if no errors on form
// 	if (count($errors) == 0) {
// 		$pass = md5($pass);

// 		$query = "SELECT * FROM users WHERE username='$uname' AND password='$pass' LIMIT 1";
// 		$results = mysqli_query($db, $query);

// 		if (mysqli_num_rows($results) == 1) { // user found
// 			// check if user is admin or user
// 			$logged_in_user = mysqli_fetch_assoc($results);
// 			if ($logged_in_user['user_type'] == 'admin') {

// 				$_SESSION['hiker'] = $logged_in_user;
// 				$_SESSION['success']  = "You are now logged in";
// 				header('location: adminHomepage.php');		  
// 			}else{
// 				$_SESSION['user'] = $logged_in_user;
// 				$_SESSION['success']  = "You are now logged in";

// 				header('location: userHomepage.php');
// 			}
// 		}else {
// 			array_push($errors, "Wrong username & password combination");
// 		}
// 	}
// } 