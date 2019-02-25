<?php

if(isset($_POST['submit'])){
	include_once 'dbconn.php';
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$research=mysqli_real_escape_string($conn,$_POST['research']);
	$type=mysqli_real_escape_string($conn,$_POST['studenttype']);

	if(empty($name)||empty($email)||empty($type)){
		header("Location: ../addStudents.php?insertDetails=empty");
		exit();
	}
	else{
		if(preg_match("/^[a-zA-Z/'/-\040]+$/", $name)){
			header("Location: ../addStudents.php?insertDetails=invalid");
			exit();
		}
		else{
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				header("Location: ../addStudents.php?insertDetails=invalidEmail");
				exit();
			}
			else{
				$sql="SELECT * FROM student_tbl WHERE std_name='$name';";
				$result=mysqli_query($conn,$sql);
				$resultCheck=mysqli_num_rows($resultCheck);
				if($resultCheck>0){
					header("Location: ../addStudents.php?insertDetails=dataAlreadyExists");
					exit();
				}
				else{
					$sql="INSERT INTO student_tbl(std_name,std_email, std_research, std_type) VALUES ('$name','$email','$research','$type');";
					mysqli_query($conn,$sql);
					header("Location: ../addStudents.php?insertDetails=success");

				}
			}
		}

	}
}
else{
	header("Location: ../addStudents.php?insertDetails=error");
	exit();
}



?>
