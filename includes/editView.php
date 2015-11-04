<?php
	include 'test.php';
	$id = $_POST['S_ID'];
?>
<h1>Edit Student</h1>
<form action="edit.php" method="post">
	ID:<input type="text" name="inputID" value=""/><br />
	Name:<input type="text" name="inputName" value=""/><br />
	Sex:<input type="text" name="inputSex" value=""/><br />
	<input type="hidden" name="S_ID" value=<?=$id?>>
	<input type="submit" name="submit" value="送出"/>
	<br />
</form>