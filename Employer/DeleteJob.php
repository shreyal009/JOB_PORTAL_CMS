<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Id=$_GET['JobId'];
	// Establish Connection with MYSQL
	$sql_connection=sqlconnect();
	// Specify the query to Insert Record
	$sql = "delete from job_master where JobId='".$Id."'";
	// execute query
	sqlquery($sql);
	// Close The Connection
	echo '<script type="text/javascript">alert("Job Deleted Succesfully");window.location=\'ManageJob.php\';</script>';
?>
</body>
</html>
