<?php
session_start();
include "database.php";


if(!isset($_SESSION["ID"]))
{
    header("location: ulogin.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Web Programming System</title>
        <link rel ="stylesheet" type="text/css" href="css/style.css">
        <body>
            <div id = "container">
                <div id = "header">
                    <h1 align="center">SLIATE Books Management System</h1>
                </div>
                <div id = "wrapper">
                    <h3 id="heading">New Book Request</Details></h3>
                        
                        <div id ="center">

                        <?php

                            if(isset($_POST["submit"]))
                            {
                                $sql = "insert into request(ID,MESSAGE,LOGS) values ({$_SESSION["ID"]},'{$_POST["mess"]}',now())";
                                $db->query($sql);
                                    echo "<p class = 'success'>Request Sent To Admin</p>";
                            }
                               
                        ?>
                            <form action ="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                                <label>Message</label>
                                <textarea required name ="mess"></textarea>
                                <button type ="submit" name ="submit">Send Request</button>
                        </form>
                        </div>
                </div>
                <div id = "navi">
                    <?php 
                        include "usersideBar.php"
                    ?>
                </div>
                <div id = "footer">
                    <p align="center">SLIATE Books Management System - JUMAIL</p>
                </div>
            </div>
        </body>
    </head>
</html>