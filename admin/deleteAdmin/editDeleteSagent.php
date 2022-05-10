<?php

session_start();
//include ('../admin/connection.php');

$con = mysqli_connect('localhost','root','','kinabalu5');
if(mysqli_connect_errno())
{
    echo "database connection error" . mysqli_connect_error();
}
$update=false;
$id="";
$username="";
$email="";
$user_type="";
$password="";

$phone_num="";

echo "it works<br><br>";

// This is for deleting the accounts in Admin side
//Deleting records           
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    echo "it works<br><br>";

    // Get all the query from all the databases
    $query3 = "SELECT * FROM sagent_account WHERE user_type='sales agent' LIMIT 1";
    $results3 = mysqli_query($con, $query3);



    if(mysqli_num_rows($results3) == 1){// sales agent found
        echo "it works<br><br>";
        $chosenSagent = mysqli_fetch_assoc($results3);

        if($chosenSagent['user_type'] == 'sales agent'){
            $query="DELETE FROM sagent_account WHERE sAgent_ID=?";
            $stmt=$con->prepare($query);
            $stmt->bind_param("i",$id);
            $stmt->execute();
    
            header('location:../checkSagent.php');
            $_SESSION['response']="Successfully Deleted!";
            $_SESSION['res_type']="danger";
        }


    }else{
        echo "Something is wrong";
        header('location:../checkSagent.php');
        echo "<h1> Delete unsuccessful </h1>";

    }

    
}

if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $query="SELECT * FROM admin_account WHERE adminID=?";
    $stmt=$con->prepare($query);
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $result=$stmt->get_result();
    $row=$result->fetch_assoc();

    $id= $row['id'];
    $username= $row['username'];
    $email= $row['email'];
    /*$user= $row['user'];
    $pass= $row['pass'];*/
    $address= $row['address'];
    $phone_num= $row['phone_num'];

    
    $update=true;
}


