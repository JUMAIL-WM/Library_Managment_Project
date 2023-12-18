<?php

session_start();
include "database.php";

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
                    <h3 id="heading">Register Here</h3>
                   <div id="center">  


                    <?php

                        if(isset($_POST["sbt"]))
                        { 
                            $insert_q = "INSERT INTO student(NAME,PASSWORD,EMAIL,DEP) VALUES('{$_POST["aname"]}','{$_POST["apass"]}','{$_POST["email"]}','{$_POST["dep"]}')";
                            $resQ = mysqli_query($db, $insert_q);
                        }
                       
                    ?>

                    
                   <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                            <label>Name</label>
                            <input type="text" name="aname" required >
                            <label>Password</label>
                            <input type="password" name="apass" required >
                            <label>E-mail</label>
                            <input type ="email" name="email" required>
                            <lable>Department: <select name="dep">
                                <option>HNDA</option>
                                <option>HNDIT</option>
                                <option>HNDF</option></select>
                    </lable>
                            <button type="submit" name = "sbt">Save Details</button>
                     </form>  
                   </div> 
                        </div>
                <div id = "navi">
                    <?php 
                        include "sideBar.php"
                    ?>
                </div>
                
                <div id = "footer">
                    <p align="center">SLIATE Books Management System - JUMAIL </p>
                </div>
            </div>
        </body>
    </head>
</html>