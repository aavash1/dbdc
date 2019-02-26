<?php 
include 'includes/dbconn.php';
$conference="SELECT * FROM paper_tbl where paper_type='conference' ;";
$journal="SELECT * FROM paper_tbl where paper_type='journal' ;";
$poster="SELECT * FROM paper_tbl where paper_type='poster' ;";
$sql = array('Conference'=>$conference,'Journal' => $journal,'Poster' => $poster);
$results = [];
foreach($sql as $key => $value){
	$result=mysqli_query($conn,$value);
	$res = array('name'=>$key,'data'=>$result);
	array_push($results,$res);
}
 ?>
<div class="container-fluid text-center">    
	<div class="row content">
		<div class="col-sm-2 sidenav">

		</div>
		<div class="col-sm-8 text-left"> 
			<?php foreach($results as $result){?>
				<h1><?php echo $result['name'] ?></h1>
				<table class="table table-striped">
					<thead>
						<tr>
						<th>Paper Titlesss</th>
						<th>Author</th>
						<th>Link/URL</th>
						<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<?php 
						$rows = $result['data'];
						while($r = mysqli_fetch_assoc($rows)) {

							?>
							<tr>
								<td><?php echo $r["paper_title"]?></td>
								<td><?php echo $r["author_name"]?></td>
								<td><a target="_blank" href='<?php echo $r["available_links"]?>'><?php echo $r["available_links"]?></a></td>
								<td>
								<a href="index.php?updatepaper&id=<?php echo $r['paper_id'] ?>" class="btn btn-default btn-sm">
									<span class="glyphicon glyphicon-pencil"></span> Edit 
								</a>
								<button type="button" class="btn btn-default btn-sm">
									<span class="glyphicon glyphicon-trash"></span> Remove 
								</button>
						</td>
							</tr>
						<?php }?>
					</tbody>
				</table>
			<?php }?>
			

			

		</div>
		<div class="col-sm-2 sidenav">

		</div>
	</div>
</div>