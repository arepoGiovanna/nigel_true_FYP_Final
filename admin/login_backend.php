<?php

//echo session_start();
//echo "This is the login <br><br>";
session_start();
include('../admin/connection.php');

// The reason I wrote this is for good practice.
$db = mysqli_connect('localhost', 'root', '', 'kinabalu5');


// variable declaration
$uname = "";
$password   = "";
$errors   = array(); 

$username = $_POST["username"];
$password = $_POST["password"];
$userSelection = $_POST["regSelector"];

//--to verify the login--
if($username == "" || $password == "" || $userSelection == "") {
    echo "Please insert all inputs!";
}
else {
    if($userSelection == "hiker") {
        // echo "<script> alert('test1'); </script>";
        $_SESSION["selectedUser"] = "hiker";
    }
    else if($userSelection == "sagent") {
        $_SESSION["selectedUser"] = "sagent";
    }
    else if($userSelection == "bagent") {
        $_SESSION["selectedUser"] = "bagent";
    }
    else if($userSelection == "mguide") {
        $_SESSION["selectedUser"] = "mguide";
    }
    else if($userSelection == "admin") {
        $_SESSION["selectedUser"] = "admin";
    }
}

// if login buttun is pressed
if(isset($_POST["loginBtn"])) {
    if($username != "" && $password != "" && $userSelection != "") {
        // echo "<script> alert('hello world!') </script>"; //debug purposes
        if(isset($_SESSION["selectedUser"]) && $_SESSION["selectedUser"] == "hiker") {
            $fromTable = "hiker_account";
            //finally set the full query
            $loginQuery = "SELECT * FROM " .$fromTable. " WHERE hikerUname = '" .$_POST["username"]. "'";
            $linkTo = "firstPage.php";
        }
        else if(isset($_SESSION["selectedUser"]) && $_SESSION["selectedUser"] == "bagent") {
            $fromTable = "bagent_account";
            $loginQuery = "SELECT * FROM " .$fromTable. " WHERE bAgent_name = '" .$_POST["username"]. "'";
            $linkTo = "firstPage.php";
        }
        else if(isset($_SESSION["selectedUser"]) && $_SESSION["selectedUser"] == "sagent") {
            $fromTable = "sagent_account";
            $loginQuery = "SELECT * FROM " .$fromTable. " WHERE sAgent_name = '" .$_POST["username"]. "'";
            $linkTo = "salesAgent.php";
        }
        else if(isset($_SESSION["selectedUser"]) && $_SESSION["selectedUser"] == "mguide") {
            $fromTable = "mguide_account";
            $loginQuery = "SELECT * FROM " .$fromTable. " WHERE mguide_uname = '" .$_POST["username"]. "'";
            $linkTo = "https://www.google.com";
        }
        else if(isset($_SESSION["selectedUser"]) && $_SESSION["selectedUser"] == "admin") {
            $fromTable = "admin_account";
            $loginQuery = "SELECT * FROM " .$fromTable. " WHERE adminName = '" .$_POST["username"]. "'";
            $linkTo = "checkAdmin.php";
        }
        else {
            //error
            echo "<script> alert('User login error!'); </script>";
            $loginQuery = "";
            $linkTo = "index.php"; //back to login page
            // return false; //stop the script from running -- for debug purposes
        }

        //execute the query
        $result = mysqli_query($db, $loginQuery);

        //verify data from database
        if(mysqli_num_rows($result) > 0) {
            // output data of each row
            // while($row = mysqli_fetch_assoc($result)) {}
            echo "<script> alert('User exists!'); </script>";

            //redirect to homepage, depending on user's type
            header("Location: " .$linkTo);
        }
        else {
            // echo "<h1>hmmm1</h1><br>";
            $_SESSION["errorMsg"] = "Invalid account details!";
            header("location: ./index.php");
        }
        // echo "<h1>hmmm3</h1><br>";
    }
    else {
        $_SESSION["errorMsg"] = "Please fill in all the inputs!";
        header("location: ./index.php");
        // echo "<h1>hmmm2</h1><br>";
    }
}

//--debug purposes--
// echo "<h1>Fromtable: ".$fromTable."</h1><br>";
// echo "<h1>loginQuery: ".$loginQuery."</h1><br>";
//--debug purposes--



//close connection
mysqli_close($db);


























//echo isset($_POST['loginBtn']);

// if (isset($_POST['loginBtn'])) {
//     echo "Login button pressed! <br><br>";
// 	global $db, $uname, $errors;

// 	// grap form values
// 	$uname = $_POST['username'];
// 	$pass = $_POST['password'];

//     echo "This is the one" .$uname. "<br>";
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

// 	//login();
// }
// // LOGIN USER
// function login(){
// 	global $db, $uname, $errors;

// 	// grap form values
// 	$uname = $_POST['username'];
// 	$pass = $_POST['password'];

//     echo "This is the one" .$uname. "<br>";
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