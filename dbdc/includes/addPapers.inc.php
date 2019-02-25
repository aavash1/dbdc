<?php
if(isset($_POST['submit'])){
	include_once 'dbconn.php';

	$title=mysqli_real_escape_string($conn,$_POST['title']);
	$author=mysqli_real_escape_string($conn,$_POST['author']);
	$url=mysqli_real_escape_string($conn,$_POST['ulinks']);
	$ptype=mysqli_real_escape_string($conn,$_POST['PaperType']);
	

	if(empty($title)||empty($author)||empty($url)){
		header("Location: ../addPaper.php?result=emptyFields");
		exit();
	}
	else{
		if(preg_match("/^[a-zA-Z/'/-\040]+$/", $title)||preg_match("/^[a-zA-Z/'/-\040]+$/", $author)){
			header("Location: ../addPaper.php?result=invalid");
			exit();
		}
		else{
			$sql="SELECT * FROM paper_tbl where paper_title='$title';";
			$result=mysqli_query($conn,$sql);
			$resultCheck=mysqli_num_rows($resultCheck);
			if($resultCheck>0){
				header("Location: ../addPaper.php?result=PaperExists");
				exit();
			}
			else{
				$sql="INSERT INTO paper_tbl(paper_title,author_name,available_links,paper_type) VALUES ('$title','$author','$url','$ptype');";
				mysqli_query($conn,$sql);
				header("Location: ../updatePaper.php?result=success");
			}
		}



	}


}
else{
	header("Location: ../addPaper.php");
	exit();
}

?>