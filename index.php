<head>
	<script src="js/jquery-1.11.3.js" type="text/javascript"></script>
	<script type="text/javascript">
		
		/*function check(){

		$("i").css("color", "yellow");
		alert("1");
		};*/

		$(function(){
			$("td").css("color", "red");
			$("i").css("color", "blue");
			
		});
		
		</script>

		<!--$(document).ready(
			$("button").click(function (){
		("i").css("color", "yellow");
		if(confirm("Do u really want to delete?")){
			location.href="./includes/delete.php?S_ID=<?php echo $id?>";	
			//document.location.href="./includes/delete.php";
		
			}
		}));
		-->
	
		
   







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
		$id=$studentid['StudentID'];
		?>
		
		 <tr>
		 <td><?=$studentid['StudentID']?></td>
		 <td><?=$studentid['StudentName']?></td>
		 <td><?=$studentid['StudentSex']?></td>
		 <td>
		 	<form action="includes/delete.php" method="post">
		 	<input type="hidden" name="S_ID" value=<?=$id?> >
			<input type="button" onclick="javascript:if(confirm('Do u really want to delete?'))location.href='./includes/delete.php?S_ID=<?php echo $id?>'" value="刪除">
			<input type="button" onclick="check()" value="刪除2">
			</form>
			<form action="includes/editView.php" method="post">
			<input type="hidden" name="S_ID" value=<?=$id?>>
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
		<i>ID:</i><input type="text" name="inputID" value=""/><br />
		<i>Name:</i><input type="text" name="inputName" value=""/><br />
		<i>Sex:</i><input type="text" name="inputSex" value=""/><br />
		<br />
		<input type="submit" name="submit" value="送出"/>

	</form>

