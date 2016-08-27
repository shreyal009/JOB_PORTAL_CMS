<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Name=$_POST['txtQual'];
	// Establish Connection with MYSQL
	include("../includes/MySQLFunc.php");
	$sql_connection=sqlconnect();
	// Specify the query to Insert Record
	$sql = "insert into qualification_master(qual_name) values('".$Name."')";
	// execute query
	sqlquery($sql);
	echo '<script type="text/javascript">alert("Qualification Inserted Succesfully");window.location=\'Qualification.php\';</script>';

?>
</body>
</html>
