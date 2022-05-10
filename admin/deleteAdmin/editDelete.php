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
    $query1 = "SELECT * FROM admin_account WHERE user_type='admin' LIMIT 1";
    $query2 = "SELECT * FROM hiker_account WHERE user_type='hiker' LIMIT 1";
    $query3 = "SELECT * FROM sagent_account WHERE user_type='sales agent' LIMIT 1";
    $query4 = "SELECT * FROM bagent_account WHERE user_type='booking agent' LIMIT 1";
    $query5 = "SELECT * FROM mguide_account WHERE user_type='mountain guide' LIMIT 1";



    $results1 = mysqli_query($con, $query1);
    $results2 = mysqli_query($con, $query2);
    $results3 = mysqli_query($con, $query3);
    $results4 = mysqli_query($con, $query4);
    $results5 = mysqli_query($con, $query5);



    if(mysqli_num_rows($results1) == 1){ //admin found
        echo "it works<br><br>";
        $chosenAdmin= mysqli_fetch_assoc($results1);

        if($chosenAdmin['user_type'] == 'admin'){
            $query="DELETE FROM admin_account WHERE adminID=?";
            $stmt=$con->prepare($query);
            $stmt->bind_param("i",$id);
            $stmt->execute();
    
            header('location:../checkAdmin.php');
            $_SESSION['response']="Successfully Deleted!";
            $_SESSION['res_type']="danger";
        }

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

?>
