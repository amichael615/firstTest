<head>
	<script src="js/jquery-1.11.3.js" type="text/javascript"></script>
</head>



<?php
	include'includes/test.php';
	
	
	$query="SELECT * FROM studentid";

	$result =mysql_query($query);
	?>
	<table width=500 border=1>
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Sex</td>
		<td>編輯</td>
	</tr>
	<?php
	while($studentid = mysql_fetch_array($result)){
		?>
		
		 <tr>
		 <td><?=$studentid['StudentID']?></td>
		 <td><?=$studentid['StudentName']?></td>
		 <td><?=$studentid['StudentSex']?></td>
		 <td>
		 	<form action="includes/delete.php" method="post">
		 	<input type="hidden" name="S_ID" value=<?=$studentid['StudentID']?> >
			<input type="submit" name="submit" value="刪除"/>
			</form>
			<form action="includes/editView.php" method="post">
			<input type="hidden" name="S_ID" value=<?=$studentid['StudentID']?>>
			<input type="submit" name="edit" value="編輯"/>
			</form>
		</td>

		 </tr>
		 
<?php
}
?>
</table>


<h1>Create Student</h1>
	<form action="create.php" method="post">
		ID:</i><input type="text" name="inputID" value=""/><br />
		Name:<input type="text" name="inputName" value=""/><br />
		Sex:<input type="text" name="inputSex" value=""/><br />
		<br />
		<input type="submit" name="submit" value="送出"/>

	</form>

<script type="text/javascript">
	$(function(){
		$("td").css("color", "red");
		$("i").css("color", "blue");
	});
	function check(string S_ID ){confirm
		var i = ("Do u really want to delete?!");
		if(i)
		{
			//document.location.href="./includes/delete.php";
			$.post("./includes/delete.php",{S_ID: S_ID})

		}
		else
		{
			location.href=window.location.href;
		}
	};

</script>