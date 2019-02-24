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
  .row.content {height: 700px;}

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

      <div class="collapse navbar-collapse" id="myNavbar">
        <?php

        if(isset($_SESSION['u_id'])){
          echo'
          <div class="navbar-header">
          <a class="navbar-brand"><img class="img-responsive2" src="img/dbdclogo.png" alt="LOGO" style="height:25px; width:25px;"></a>
          </div><ul class="nav navbar-nav">
          <li class="dropdown">
          <a href="#lala" class="dropdown-toggle" data-toggle="dropdown" >
          Students
          <b class="caret"></b>
          </a>
          <ul class="dropdown-menu" role="listbox">
          <li><a href="index.php?addStudents" role="option">Add Students</a></li>
          <li class="divider"></li>
          <li><a href="index.php?updateStudents" role="option">Update Students</a></li>

          </ul>
          </li>

          <li class="dropdown">
          <a href="#lala" class="dropdown-toggle" data-toggle="dropdown" >
          Publications
          <b class="caret"></b>
          </a>
          <ul class="dropdown-menu" role="listbox">
          <li><a href="index.php?addConf" role="option">Add Papers</a></li>
          <li class="divider"></li>
          <li><a href="index.php?updatePaper" role="option">Update Papers</a></li>

          </ul>
          </li>
 

     
          <form action="includes/logout.inc.php" method="POST">
          <button type="submit" name="submit" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </button>
         
          </form>';
          
        }
             // </ul>
          // <ul class="nav navbar-nav navbar-right">
          // <li><a href="index.php?login"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          // </ul>
        else{
          echo'
          <div class="navbar-header">
          <!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
          </button> -->
          <a class="navbar-brand" href="index.php"><img class="img-responsive2" src="img/dbdclogo.png" alt="LOGO" style="height:25px; width:25px;"></a>
          </div><ul class="nav navbar-nav">
          <li class="active"><a href="index.php?About">About Us</a></li>
          <li><a href="index.php?Professor">Professor</a></li>
          <li class="dropdown">
          <a href="#lala" class="dropdown-toggle" data-toggle="dropdown" >
          Students
          <b class="caret"></b>
          </a>
          <ul class="dropdown-menu" role="listbox">
          <li><a href="index.php?current" role="option">Current Students</a></li>
          <li class="divider"></li>
          <li><a href="index.php?alumni" role="option">Alumnis</a></li>

          </ul>
          </li>

          <li class="dropdown">
          <a href="#lala" class="dropdown-toggle" data-toggle="dropdown" >
          Publications
          <b class="caret"></b>
          </a>
          <ul class="dropdown-menu" role="listbox">
          <li><a href="index.php?conference" role="option">Conference Papers</a></li>
          <li class="divider"></li>
          <li><a href="index.php?journal" role="option">Journal Papers</a></li>

          </ul>
          </li>

          <li><a href="index.php?Contact">Contact</a></li>


          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php?login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>';
        }
        ?>
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
else if(isset($_GET['current'])){
  include 'includes/currentstudent.php';
}
else if(isset($_GET['alumni'])){
  include 'includes/alumni.php';
}
else if(isset($_GET['conference'])){
  include 'includes/conferencep.php';
}
else if(isset($_GET['journal'])){
  include 'includes/journalp.php';
}
else if(isset($_GET['addStudents'])){
  include 'addStudents.php';
}
else if(isset($_GET['updateStudents'])){
  include 'updateStudents.php';
}
else if(isset($_GET['addConf'])){
  include 'addPaper.php';
}
else if(isset($_GET['updatePaper'])){
  include 'updatePapers.php';
}
else{
	include 'includes/content-aboutus.php';
}
?>

<?php
include 'includes/footer.php';


?> 

</body>
</html>
