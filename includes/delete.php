<head>
	<script src="../js/jquery-1.11.3.js" type="text/javascript"></script>
</head>

<?php
	include 'test.php';
	$id = $_POST['S_ID'];
	//$id=$_GET['S_ID'];
	$sql="DELETE FROM studentid WHERE StudentID = '$id'";
?>


<?php

		if(mysql_query($sql))
		{
			header('Location:../index.php');
		}
		else
		{
			echo "Hello World";
		}

?>

