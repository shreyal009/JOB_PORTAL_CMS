<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete User</title>
</head>

<body>
<?php

	$Id=$_GET['UserId'];
	// Establish Connection with MYSQL
	include("../includes/MySQLFunc.php");
	$sql_connection=sqlconnect();
	// Specify the query to Update Record
	$sql = "delete from user_master where UserId='".$Id."'";
	// execute query
	sqlquery ($sql);
	echo '<script type="text/javascript">alert("User Deleted Succesfully");window.location=\'User.php\';</script>';

?>
</body>
</html>
