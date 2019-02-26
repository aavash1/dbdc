<?php

if(isset($_POST['submit'])){
	session_start();
	unset($_SESSION['u_id']);
	session_unset();
	session_destroy();
	header("Location: ../index.php?logout=success");
	exit();

}