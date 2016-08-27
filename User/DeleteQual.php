<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete Qualification</title>
</head>

<body>
<?php

	$Id=$_GET['QualId'];
	include("../includes/MySQLFunc.php");
	$sql_connection=sqlconnect();
	// Specify the query to Update Record
	$sql = "delete from qualification_master where qual_id='".$Id."'";
	// execute query
	sqlquery ($sql);
	echo '<script type="text/javascript">alert("Qualification Deleted Succesfully");window.location=\'Qualification.php\';</script>';

?>
</body>
</html>
