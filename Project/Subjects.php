<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Web Programming System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <style>
  
 *{
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.column {
  float: left;
  width: 50%;
  padding: 10px;
}

.column img {
  margin-top: 12px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
 <?php include_once('includes/header.php');?>
            <!-- Header-->


            <div class="header">
  <u><h1>ALL SUBJECTS IMAGES</h1></u>
</div>


<div class="row"> 
  <div class="column">
  <img src="img/A.png" style="width:100%">
  <img src="img/B.png" style="width:100%">
  <img src="img/C.png" style="width:100%">
  <img src="img/D.png" style="width:100%">
  <img src="img/E.png" style="width:100%">
  <img src="img/F.png" style="width:100%">
  <img src="img/G.png" style="width:100%">
  </div>
  <div class="column">
  <img src="img/G.png" style="width:100%">
  <img src="img/F.png" style="width:100%">
  <img src="img/E.png" style="width:100%">
  <img src="img/D.png" style="width:100%">
  <img src="img/C.png" style="width:100%">
  <img src="img/B.png" style="width:100%">
  <img src="img/A.png" style="width:100%">
  </div>  
  
</div>
        <!-- Footer-->
<?php include_once('includes/footer.php'); ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
