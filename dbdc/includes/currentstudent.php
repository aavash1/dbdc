<?php
include 'dbconn.php';
$phd="SELECT * FROM student_tbl where std_type='PhD' ;";
$master="SELECT * FROM student_tbl where std_type='Master' ;";
$masteral="SELECT * FROM student_tbl where std_type='Master Alumni' ;";
$phdal="SELECT * FROM student_tbl where std_type='PhD Alumni' ;";
$sql = array('PhD Candidate'=>$phd,'Master Students' => $master);
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
							<th>Name</th>
							<th>Email</th>
							<th>Area of Research</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>

						<?php 
						$rows = $result['data'];
						while($r = mysqli_fetch_assoc($rows)) {

							?>
							<tr>
								<td><?php echo $r["std_name"]?></td>
								<td><?php echo $r["std_email"]?></td>
								<td><?php echo $r["std_research"]?></td>
								<td><a class="btn btn-primary" href="">Edit</a></td>
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
