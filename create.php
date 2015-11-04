<?php
	include 'includes/test.php';

	$in_id = $_POST['inputID'];
	$in_name = $_POST['inputName'];
	$in_Sex = $_POST['inputSex'];
	if(!$_POST['submit']){
		echo "please fill out the from";
		header ('Location: index.php');
	}
	else{
		mysql_query ("INSERT INTO studentid(StudentID,StudentName,StudentSex)VALUES('$in_id','$in_name','$in_Sex')");
		echo "User has been Added!";
		header('Location: index.php');
	}
?>