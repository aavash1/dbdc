<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Database and Dependable Computing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  /* Remove the navbar's default margin-bottom and rounded borders */ 
  .navbar {
    margin-bottom: 0;
    border-radius: 0;
  }

  /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
  .row.content {height: 450px}

  /* Set gray background color and 100% height */
  .sidenav {
    padding-top: 20px;
    background-color: #f1f1f1;
    height: 100%;
  }

  /* Set black background color, white text and some padding */
  footer {
    background-color: #555;
    color: white;
    padding: 15px;
  }

  /* On small screens, set height to 'auto' for sidenav and grid */
  @media screen and (max-width: 767px) {
    .sidenav {
      height: auto;
      padding: 15px;
    }
    .row.content {height:auto;} 
  }
</style>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
     <!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button> -->
      <a class="navbar-brand" href="index.php">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <?php

      if(isset($_SESSION['u_id'])){
        echo'
        <form>
        <form action="includes/logout.inc.php" method="POST">
        <button type="submit" name="submit"><span class="glyphicon glyphicon-log-out"> Logout</button>
        </form>';
      }
      else{
        echo'<ul class="nav navbar-nav">
        <li class="active"><a href="index.php?About">About Us</a></li>
        <li><a href="index.php?Professor">Professor</a></li>
        <li><a href="index.php?Research">Research Members</a></li>
        <li><a href="index.php?Publications">Publications</a></li>
        <li><a href="index.php?Contact">Contact Us</a></li>

        </ul>';
      }
      ?>



<!-- 
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php?About">About Us</a></li>
        <li><a href="index.php?Professor">Professor</a></li>
        <li><a href="index.php?Research">Research Members</a></li>
        <li><a href="index.php?Publications">Publications</a></li>
        <li><a href="index.php?Contact">Contact Us</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul> -->
    </div>
  </div>
</nav>

<?php 
if(isset($_GET['Professor'])){
	include 'includes/content-professors.php';
}
else if(isset($_GET['Research'])){
	include 'includes/content-members.php';
}
else if(isset($_GET['Publications'])){
	include 'includes/content-publications.php';
}
else if(isset($_GET['Contact'])){
	include 'includes/content-contactus.php';
}
else if(isset($_GET['login'])){
  include 'includes/login.php';
}
else{
	include 'includes/content-aboutus.php';
}
?>

<footer class="container-fluid text-center">
  <p>&copy DBDC Laboratory. All rights reserved</p>
  <p>안녕하세요, 정말 필요한 경우 사용할 수 있습니다.</p>

</footer>

</body>
</html>
