<head>
	<script src="js/jquery-1.11.3.js" type="text/javascript"></script>
	<script type="text/javascript">
			$(function(){
			$("td").css("color", "red");
			
		});
</script>
</head>

<table width=500 border=1>
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Sex</td>
	</tr>



<?php
	include 'includes/test.php';


	$Ser_ID = $_POST['searchID'];
	$Ser_Name = $_POST['searchName'];
	$Ser_Sex = $_POST['searchSex'];

	$sqlStr="1=1 ";
	if($Ser_ID!=null)
	{
		$sqlStr=$sqlStr."AND StudentID LIKE ".$Ser_ID ;
	}
	if($Ser_Name!=null)
	{
		$sqlStr=$sqlStr."AND StudentName LIKE '%".$Ser_Name."%' ";
	}
	if($Ser_Sex!=null)
	{
		$sqlStr=$sqlStr."AND StudentSex LIKE '$Ser_Sex' ";
	}


 	$sql="SELECT *FROM studentid WHERE ".$sqlStr;
	echo $sql;
	$result=mysql_query($sql);

	while($studentArray = mysql_fetch_array($result)){
		?>
		
		 <tr>
		 <td><?=$studentArray['StudentID']?></td>
		 <td><?=$studentArray['StudentName']?></td>
		 <td><?=$studentArray['StudentSex']?></td>
<?php
}
?>
