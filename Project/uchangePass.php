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
                    <h3 id="heading">Change Password</Details></h3>
                        
                        <div id ="center">

                        <?php
                            if(isset($_POST["submit"]))
                            {
                                $sql = "SELECT * from student WHERE PASSWORD ='{$_POST["opass"]}' and ID='{$_SESSION["ID"]}'";
                                $res = $db->query($sql);
                                if($res->num_rows>0)
                                {
                                    $s ="update student set PASSWORD ='{$_POST["npass"]}' where ID =".$_SESSION["ID"];
                                    $db->query ($s);
                                    echo "<p class = 'success'>Password Changed Succsess</p>";
                                }
                                else
                                {
                                    echo "<p class = 'error'>Invalid Password</P>";
                                }
                            }


                        ?>
                            <form action ="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                                <lable>Old Password</lable>
                                <input type ="password" name="opass"required>
                                <label>New Password</label>
                                <input type ="text" name ="npass" required>
                                <button type ="submit" name ="submit">Update Password</button>
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