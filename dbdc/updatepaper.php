<?php 
include 'includes/dbconn.php';
include 'includes/auth.php';
$id = $_GET['id'];
$id = htmlspecialchars($id);
$id = mysqli_escape_string($conn,$id);
if(!$id){
	header("Location: ../index.php?updatePaper");
}

$sql="SELECT * FROM paper_tbl where paper_id=$id limit 1";
$result=mysqli_query($conn,$sql);
while($r = mysqli_fetch_assoc($result)) {




 ?>

 <div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-8 text-left"> 
     <h1>Please update the Paper Details</h1>

     <form class="form-horizontal" action="includes/updatepaper.inc.php" method="POST">
      <input name="paper_id" type="hidden" value="<?php echo $r['paper_id'] ?>" name="paper_id">

      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Paper Title:</label>
        <div class="col-sm-10">
          <input type="text" value="<?php echo $r['paper_title'] ?>" class="form-control" id="title" placeholder="Paper Title" name="title">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Main Author:</label>
        <div class="col-sm-10">          
          <input type="text" value="<?php echo $r['author_name'] ?>" class="form-control" id="author" placeholder="First Author" name="author_name">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2">Available Link:</label>
        <div class="col-sm-10">          
          <input type="text" value="<?php echo $r['available_links'] ?>" class="form-control" id="ulinks" placeholder="website or URLs" name="available_links">
        </div>
      </div>  

      <div class="form-group">
        <label class="control-label col-sm-2">Select Paper Type:</label>
        <div class="col-sm-2"> 
          <select class="form-control" id="sel1" name="paper_type">
            <option value="conference" <?php if($r['paper_type']=='conference')echo 'selected'; ?>>Conference Paper</option>
            <option value="poster" <?php if($r['paper_type']=='poster')echo 'selected'; ?>>Poster</option>
            <option value="journal" <?php if($r['paper_type']=='journal')echo 'selected'; ?>>Journal</option>
          </select>
        </div>
      </div>

      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default" name="submit">Submit</button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-sm-2 sidenav">

  </div>
</div>
</div>

 <?php } ?>