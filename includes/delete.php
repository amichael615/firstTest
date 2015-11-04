<head>
	<script src="../js/jquery-1.11.3.js" type="text/javascript"></script>
</head>

<?php
	echo"<script type='text/javascript'>check();</script>";
	include 'test.php';
	$id = $_POST['S_ID'];
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

<script type="text/javascript">
$(function check(){
	alert("Do u really want to delete?!");


})
</script>