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
                <div id = "wrapper"><br><br><br><br>
                    <h1 id="heading">Welcome <?php echo $_SESSION["NAME"];?> </h1>

                   
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