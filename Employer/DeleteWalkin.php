<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Id=$_GET['WalkinId'];
	// Establish Connection with MYSQL
	include "../includes/MySQLFunc.php";
	$sql_connection=sqlconnect();
	// Specify the query to Insert Record
	$sql = "delete from walkin_master where WalkinId='".$Id."'";
	// execute query
	sqlquery ($sql);
	echo '<script type="text/javascript">alert("Walkin Deleted Succesfully");window.location=\'ManageWalkin.php\';</script>';
?>
</body>
</html>
