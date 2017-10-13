<?php
	extract($_POST);
	$sourcePath = $_FILES['image']['tmp_name'];       // Storing source path of the file in a variable
	$targetPath = "upload/".$_FILES['image']['name']; // Target path where file is to be stored
	move_uploaded_file($sourcePath,$targetPath) ;	
	$f=fopen("image.txt","a") or die("Unable to open file!");
	fwrite($f,$data.$targetPath."\n");
	fclose($f);
?>

