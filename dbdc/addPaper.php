

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-8 text-left"> 
     <h1>Please Insert the Paper Details</h1>

     <form class="form-horizontal" action="includes/addPapers.inc.php" method="POST">
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Paper Title:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="title" placeholder="Paper Title" name="title">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Main Author:</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" id="author" placeholder="First Author" name="author">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2">Available Link:</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" id="ulinks" placeholder="website or URLs" name="ulinks">
        </div>
      </div>  

      <div class="form-group">
        <label class="control-label col-sm-2">Select Paper Type:</label>
        <div class="col-sm-2"> 
          <select class="form-control" id="sel1" name="PaperType">
            <option>Conference Paper</option>
            <option>Poster</option>
            <option>Journal</option>
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