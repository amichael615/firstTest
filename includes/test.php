<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass= "";
	$db = "student";

	mysql_connect($dbhost,$dbuser,$dbpass);

	if(! mysql_select_db($db))
		die("error");
?>