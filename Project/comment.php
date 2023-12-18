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
                    <h3 id="heading">Send Your Comment</Details></h3>

                    <?php

                        if(isset($_POST["submit"]))
                        {   
                            $sql = "insert into comment(BID,SID,COMMENT,LOGS) values ({$_GET["id"]}, {$_SESSION["ID"]}, '{$_POST["mes"]}', now() )";
                            $db ->query($sql);       
                        }

                        $sql = "select * from book where BID=".$_GET["id"];
                        $res = $db->query($sql);
                        if($res->num_rows>0)
                        {
                            echo "<table>";
                            $row = $res->fetch_assoc();
                            echo "
                                <tr>
                                    <th>Book Name</th>
                                    <td>{$row["BTITLE"]}</td>
                                </tr>
                                <tr>
                                    <th>Keywords</th>
                                    <td>{$row["KEYWORDS"]}</td>
                                </tr>
                            ";
                            echo "</table>";
                        }
                        else 
                        {
                            echo "<p class ='error'> No Books Founted</p>";
                        }

                    ?>
                        
                        <div id ="center">

                        <form action="<?php echo $_SERVER["REQUEST_URI"];?>" method="post">
                            <label>Your Comment</label>
                            <textarea name ="mes" required></textarea>
                            <button type ="submit" name ="submit"> Post Now</button>

                        </form>
    
                        </div>

                        <?php
                            $sql = "select student.NAME,comment.COMMENT,comment.LOGS from comment inner join student on comment.SID=student.ID where comment.BID={$_GET["id"]} order by comment.CID desc";
                            $res=$db->query($sql);
                            if($res->num_rows>0)
                            {
                                while ($row=$res->fetch_assoc()){
                                    echo "
                                        <p>
                                        <strong>{$row["NAME"]}</strong>
                                        {$row["COMMENT"]}
                                        <i>{$row["LOGS"]}</i>
                                        </p>
                                    ";
                                }
                               
                            }
                            else
                            {
                                echo "<p class ='error'>No Comment Yet....</p>";
                            }

                        ?>
                    
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