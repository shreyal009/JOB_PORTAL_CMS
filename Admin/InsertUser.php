<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$UserLevel=$_POST['cmbUserLevel'];

	include("../includes/PasswordHash.php");
	$phpass = new PasswordHash(8, TRUE);
	$Password = $phpass->HashPassword($Password);

	// Establish Connection with MYSQL
	include("../includes/MySQLFunc.php");
	$sql_connection=sqlconnect();
	// Specify the query to Insert Record
	$sql = "insert into user_master	(UserName,Password,UserLevel) values('".$UserName."','".$Password."',".$UserLevel.")";
	// execute query
	if(sqlquery ($sql)){
		echo '<script type="text/javascript">alert("User Inserted Succesfully");window.location=\'User.php\';</script>';
	}
	else
	{
		echo '<script type="text/javascript">alert("Username already exists, please slect different username");window.location=\'User.php\';</script>';
	}
?>
</body>
</html>
