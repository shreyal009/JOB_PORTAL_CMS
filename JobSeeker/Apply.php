<?php 
if(!isset($_SESSION))
{session_start();}

if(!isset($_SESSION['jobseeker']))
{
	echo '<script type="text/javascript">alert("Session expired, please login again");window.location=\'../index.php\';</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$JobId=$_GET['JobId'];
	$JobSeekId=$_SESSION['ID'];
	$Status="Apply";
	$Desc="No Message";
	
	// Establish Connection with MYSQL
	include "../includes/MySQLFunc.php";
	$sql_connection=sqlconnect();	
	// Specify the query to Insert Record
	$sql1 = "select * from application_master where JobSeekId='".$JobSeekId."' and JobId='".$JobId."'";
	// execute query
	$result1 = sqlquery ($sql1);
	if($result1){
		$records1 = sqlnumrows($result1);
	}
	if($records1==0)
	{
	// Specify the query to Insert Record
	$sql = "insert into application_master (JobSeekId,JobId,Status,Description) values('".$JobSeekId."','".$JobId."','".$Status."','".$Desc."')";
	// execute query
	sqlquery ($sql);
	echo '<script type="text/javascript">alert("Succesfully Applied For Job");window.location=\'SearchJob.php\';</script>';
	}
	else
	{
		echo '<script type="text/javascript">alert("You have already Applied For Job");window.location=\'SearchJob.php\';</script>';
	}
?>
</body>
</html>
