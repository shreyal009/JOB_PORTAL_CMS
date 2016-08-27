<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete News</title>
</head>

<body>
<?php

	$Id=$_GET['NewsId'];
	include("../includes/MySQLFunc.php");
	$sql_connection=sqlconnect();
	// Specify the query to Update Record
	$sql = "delete from news_master where NewsId='".$Id."'";
	// execute query
	sqlquery ($sql);
	echo '<script type="text/javascript">alert("News Deleted Succesfully");window.location=\'News.php\';</script>';

?>
</body>
</html>
