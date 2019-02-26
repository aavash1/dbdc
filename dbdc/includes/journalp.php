<?php
include 'dbconn.php';
$Journal="SELECT * FROM paper_tbl where paper_type='Journal' ;";
$sql = array('Journal' => $Journal);
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
							<th>Paper Title</th>
							<th>Main Author</th>
							<th>Availabe Links/URLs</th>
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
								<td><?php echo $r["available_links"]?></td>
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