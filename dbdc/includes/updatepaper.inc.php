<?php 
include 'dbconn.php';
$paper_id = $_POST['paper_id'];
$author_name = $_POST['author_name'];
$title = $_POST['title'];
$available_links = $_POST['available_links'];
$paper_type = $_POST['paper_type'];

$sql = "update paper_tbl set author_name='{$author_name}',paper_title='{$title}',available_links='{$available_links}',paper_type='{$paper_type}' where paper_id={$paper_id};";
  if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
   } else {
      echo "Error updating record: " . mysqli_error($conn);
   }
	mysqli_close($conn);
	header("Location: ../index.php?listpaper");
   
?>