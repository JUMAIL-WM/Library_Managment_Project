<?php
    $db = mysqli_connect("localhost", "root", "","books");
    
    if(!$db)
    {
      die("Can't connect database. ".mysqli_connect_error());
    }
  
?>