<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$News=$_POST['txtNews'];
	$Date=$_POST['txtDate'];
	// Establish Connection with MYSQL
	include("../includes/MySQLFunc.php");
	$sql_connection=sqlconnect();
	// Specify the query to Insert Record
	$sql = "insert into news_master	(News,NewsDate) values('".$News."','".$Date."')";
	// execute query
	sqlquery($sql);
	echo '<script type="text/javascript">alert("New News Inserted Succesfully");window.location=\'News.php\';</script>';

?>
</body>
</html>
