<?php

include 'includes/dbconn.php';

?>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-8 text-left"> 
     <h1>Please Insert the student details</h1>

     <form class="form-horizontal" action="includes/studentadd.inc.php" method="POST">
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name:</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter fullname" >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="comment">Area of Research:</label>
        <div class="col-sm-10"> 
          <textarea class="form-control" id="comment" name="research"></textarea>
          <small id="emailHelp" class="form-text text-muted">*NOTE: ONLY FOR THE CURRENT STUDENTS</small>
        </div>

      </div>

      <div class="form-group">
        <label class="control-label col-sm-2">Select Student Type:</label>
        <div class="col-sm-2"> 
          <select class="form-control" id="sel1" name="studenttype">
            <option>PhD</option>
            <option>Master</option>
            <option>PhD Alumni</option>
            <option>Master Alumni</option>
          </select>
        </div>
      </div>

      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-insert" name="submit">Submit</button>
        </div>
      </div>
    </form>

  </div>
  <div class="col-sm-2 sidenav">

  </div>
</div>
</div>