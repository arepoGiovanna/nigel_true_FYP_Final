<?php

session_start();
include('../admin/connection.php');
// The reason I wrote this is for good practice.
$db = mysqli_connect('localhost', 'root', '', 'kinabalu5');


$name = "";
$email = "";
$errors = array();

$test = isset($_POST['submit']);
echo $test;
if(isset($_POST['submit'])){
    booking();
}else{
    
    echo "not working";
}
function booking(){
    // call these variables with the global keyword to make them available in function
    global $db, $errors, $uname, $email;

    // receive all input values from the form. Call the e() function
    // defined below to escape form values
    $name        =  $_GET['name']; //Get username
    $email       =  $_GET['email'];    //Get email
    $phonenum    =  $_GET['phoneNum'];     //Get phone num
    $myrNum      =  $_GET['myrNo'];
    $intlNum     =  $_GET['intlNo'];

    echo "test variable pass <br><br>";
    // form validation: ensure that the form is correctly filled
    if (empty($name)) {
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
    if (empty($myrNum)) { 
        echo "test myrNum fail <br><br>"; 
        array_push($errors, "Number of Malaysian hikers are required"); 
    }
    if (empty($intlNum)) { 
        echo "test intlNum fail <br><br>"; 
        array_push($errors, "Number of International hikers are required"); 
    }

    /*
    if (strlen($pass) <= 7)
    {
        echo "test long password fail <br><br>"; 
    array_push($errors, "password must be 7 characters");
    }
    */

    $user_check_query = "SELECT * FROM assign_mguide";
    $result = mysqli_query($db, $user_check_query);

    echo "test user check query pass <br><br>";
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo " test check mysqli num rows pass <br><br>";
        // $user = mysqli_fetch_assoc($result);
        // if ($uname===$user['adminName'])
        // {
        //     echo " test check username exist fail <br><br>";
        //     array_push($errors, "Username already exists");
        // }
        // else
        // {
        //     echo " test check email exist fail <br><br>";
        //     array_push($errors, "email already exists");
        // }  
    } 

    echo " test all user check query pass <br><br>";
    echo "Count error = ".count($errors)."<br><br>";
        // register user if there are no errors in the form
    if (count($errors) == 0) {
        $pass = md5($pass);//encrypt the password before saving in the database

        echo " test password encrypt pass <br><br>";
        //Insert data into this table "admin_accounts" 
        $query = "INSERT INTO admin_account (adminName, adminPass, adminEmail, user_type, adminConnum) 
                    VALUES('$uname', '$pass','$email', 'admin', '$phonenum')";
        echo " test user check query pass <br><br>" . $query;
        $test = mysqli_query($db, $query);
        echo " test mysqli_query <br><br>".$test;
        // get id of the created user
        $logged_in_user_id = mysqli_insert_id($db);

        $_SESSION['admin'] = getUserById($logged_in_user_id); // put logged in user in session
        $_SESSION['success']  = "You are now logged in";
        //header('location: userHomepage.php');	
        

    }else{
        echo "<script>alert('Please enter correct credentials!);'</script>";
        header("location: ./register_Admin.php");
    }
}

// return hiker array from their id
function getUserById($id){
global $db;
$query = "SELECT * FROM admin_account WHERE adminID=" . $id;
$result = mysqli_query($db, $query);

$user = mysqli_fetch_assoc($result);
return $user;
}