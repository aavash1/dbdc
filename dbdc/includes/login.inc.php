<?php

if(isset($_POST['submit'])){
	include 'dbconn.php';

	$uid=mysqli_real_escape_string($conn,$_POST['uname']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	//error handling

	if(empty($uid)||empty($pwd)){
		header("Location: ../index.php?signin=emptyField");
		exit();

	}
	else{
		$sql="SELECT * FROM login_tbl where user_uid='$uid';";
		$result=mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);
		if($resultCheck<1){
			header("Location: ../index.php?login=error");
			exit();
		}
		else{
			if($row=mysqli_fetch_assoc($result)){

				$sql="SELECT * FROM login_tbl where user_pwd='$pwd';";
				$result=mysqli_query($conn,$sql);
				$resultCheck=mysqli_num_rows($result);
				if($resultCheck<1){
					header("Location: ../index.php?login=error");
					exit();
				}
				// //De-hashing the password
				// $hashedPasswordCheck=password_verify($pwd,$row['user_pwd']);
				// if($hashedPasswordCheck==false){
				// 	header("Location: ../index.php?login=wrongPassword");
				// }
				else{
					//Login the user here
					session_start();
					$_SESSION['u_id']=$row['user_id'];
					$_SESSION['u_uid']=$row['user_uid'];
					header("Location: index.php");
					exit();

				}

			}
		}

	}

}
else{
	header("Location: ../index.php?login=error");
	exit();
}