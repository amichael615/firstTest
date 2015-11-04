<?php
	include 'test.php';
	$id = $_POST['S_ID'];
	$in_id = $_POST['inputID'];
	$in_name = $_POST['inputName'];
	$in_Sex = $_POST['inputSex'];
	$sql = $sql = "UPDATE .studentid SET StudentID = '$in_id', `StudentName` = '$in_name', `StudentSex` = '$in_Sex' WHERE StudentID = '$id'";
if(mysql_query($sql))
		{
			header('Location:../index.php');
		}
		else
		{
			echo "Hello World";
		}
?>