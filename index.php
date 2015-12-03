<!--在使用刪除時，請注意delete裡的POST與GET-->
<head>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-1.11.3.js" type="text/javascript"></script>
	<script src="js/jquery.validate.js" type="text/javascript"></script>
	
	<script type="text/javascript">
	$.validator.addMethod(
		"letter_num_only",
		function(value, element) {
			var re = new RegExp('^[a-zA-Z\-]+$');
			return this.optional(element) || re.test(value);
		},
		"Please enter English!"
	);
	$(function(){
		$("#checktext").validate();
			
	});		
/*check的錯誤訊息: 因為原本是delete.php?S_ID=箭頭 問號php echo 錢id*問號 箭頭
因為就算註解掉這一整句 php還是會執行 並且因為PHP會先跑 跑完再跑JS 導致JS裡的PHP找不到值
<input type="button" onclick="javascript:if(confirm('Do u really want to delete?'))location.href='./includes/delete.php?S_ID=<?php echo $id?>'" value="刪除">

*/
	function check(id){

		if(confirm("Do u really want to delete?")){
			//var id=$('[name=S_ID]').val();
			$.ajax({
				url:"includes/delete.php",
				data:{"S_ID":id},
				type:"POST",
				dataType:'text',
				success:function(){
					alert("You got it");
				},
				error:function(){
					alert("Error");
				},

			});
			$("#"+id).remove();
		}
		};
		
	</script>

</head>
<body>
<?php
	include'includes/test.php';
		
	$query="SELECT * FROM studentid";
	$result =mysql_query($query);
?>

	<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Sex</th>
		<th>編輯</th>
	</tr>
<?php
	while($studentid = mysql_fetch_array($result)){
		$id=$studentid['StudentID'];
?>
		
		<tr id="<?php echo $id;?>">
			<td><?=$studentid['StudentID']?></td>
			<td><?=$studentid['StudentName']?></td>
			<td><?=$studentid['StudentSex']?></td>
			<td>
		 		<form action="includes/delete.php" method="post">
		 			<input type="hidden" name="S_ID" id="S_ID" value=<?=$id?> >
					<input type="button" onclick="check(<?=$id?>)" value="刪除">
				</form>
				<form action="includes/editView.php" method="post">
					<input type="hidden" name="S_ID" value=<?php echo $id;?> >
					<input type="submit" name="edit" value="編輯"/>
				</form>
			</td>

		</tr>
		 
<?php
	}
?>
</table>

<div class="table2">
	<div id="section">
		<h2>Create Student</h2>
			<form action="create.php" id="checktext" method="post">
				<div class="i">ID:<input type="text" name="inputID" class="required digits " minlength="5" value="" /><br /></div>
				<div class="i">Name:<input type="text" name="inputName" class="required letter_num_only" minlength="3" value="" /><br /></div>
				<div class="i">Sex:<input type="text" name="inputSex" class="required" minlength="1" value="" /><br /></div>
				<br />
				<input type="submit" name="submit" value="送出"/>
			</form>
	</div>
	<div id="section">
		<h2>Search</h2>
			<form action="Search.php" method="post">
				<div class="i">ID:<input type="text" name="searchID" value=""/><br /></div>
				<div class="i">Name:<input type="text" name="searchName" value=""/><br /></div>
				<div class="i">Sex:<input type="text" name="searchSex" value=""/><br /></div>
				<br />
				<input type="submit" name="submit" value="送出"/>
			</form>
	</div>

</div>
</body>