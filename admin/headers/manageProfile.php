<?php
    //TO MANAGE THE HOMEPAGE

    //require "./databases/database/database.php"; //path relative to homePage.php
    include ("../admin/connection.php");
    $db = mysqli_connect('localhost', 'root', '', 'kinabalu5');
    //-----variables-----

    //-----queries-----
    //$getUserQuery = "SELECT id, fullName, username, email, password, cPassword FROM " .$accTblName. " WHERE username ='" .$_SESSION["s_username"]. "' AND password = '" .$_SESSION["s_password"]. "'";
    // $testGetUserQuery = "SELECT id, fullName, username, email, password, cPassword FROM " .$accTblName;
    if(isset($_SESSION["selectedUser"]) && $_SESSION["selectedUser"] == "hiker") {
        $fromTable = "hiker_account";
        //finally set the full query
        $getUserQuery = "SELECT * FROM " .$fromTable. " WHERE hikerUname = '" .$_SESSION["username"]. "'";
        //$linkTo = "firstPage.php";
        $getUser = $db->exeQuery($getUserQuery);
    }
    else if(isset($_SESSION["selectedUser"]) && $_SESSION["selectedUser"] == "bagent") {
        $fromTable = "bagent_account";
        $getUserQuery = "SELECT * FROM " .$fromTable. " WHERE bAgent_name = '" .$_SESSION["username"]. "'";
        $getUser = $db->exeQuery($getUserQuery);
        //$linkTo = "firstPage.php";
    }
    else if(isset($_SESSION["selectedUser"]) && $_SESSION["selectedUser"] == "sagent") {
        $fromTable = "sagent_account";
        $getUserQuery = "SELECT * FROM " .$fromTable. " WHERE sAgent_name = '" .$_SESSION["username"]. "'";
        $getUser = $db->exeQuery($getUserQuery);
        //$linkTo = "salesAgent.php";
    }
    else if(isset($_SESSION["selectedUser"]) && $_SESSION["selectedUser"] == "mguide") {
        $fromTable = "mguide_account";
        $getUserQuery = "SELECT * FROM " .$fromTable. " WHERE mguide_uname = '" .$_SESSION["username"]. "'";
        $getUser = $db->exeQuery($getUserQuery);
        //$linkTo = "https://www.google.com";
    }
    else {
        //error
        echo "<script> alert('User login error!'); </script>";
        $loginQuery = "";
        //$linkTo = "index.php"; //back to login page
        // return false; //stop the script from running -- for debug purposes
    }
    
    
    $getUser = $connObj->exeQuery($getUserQuery);
    //-----queries-----

    //-----operations-----
    if($getUser->num_rows > 0) {
        while($row = $getUser->fetch_assoc()) {
            echo "
            <h2>Hi <span id='nameSpan'>".$row["fullName"]."</span> !</h2>
            ";
        }
    }
    else {
        echo "Error: " .mysqli_error($connObj->getConn()). "<br>";
    }
    //-----operations-----

    $connObj->closeConn();
?>