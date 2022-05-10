<?php  
    session_start();
    include('../admin/connection.php');
?>


<!DOCTYPE html>
<head>

</head>

<body>
    <div id="mainContainer">
            <div id="firstBody">
                <center>
                    <h2>Home</h2>
                    <hr id="horiLine1">
                    <?php require "../admin/headers/manageProfile.php"; ?>
                </center>
            </div>
        </div>

        <?php
            //---display msg output---
            if(isset($_SESSION["msg"])) {
                echo 
                "<script>
                    alert('".$_SESSION["msg"]."');
                </script>
                ";
            }
            unset($_SESSION["msg"]); //->this way, no output when page loaded
            //---display msg output---
        ?>   

</body>



<html>