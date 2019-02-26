<?php 
if(!isset($_SESSION))
	session_start();
if(!isset($_SESSION['u_id'])){
	header('Location: index.php');
}

 ?>