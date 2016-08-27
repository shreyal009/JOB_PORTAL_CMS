<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(!isset($_SESSION))
{
session_start();
}
	$FeedBack=$_POST['txtFeedback'];
	$FDate= date('y/m/d');
	$Id=$_SESSION['ID'];
	
	
	
	// Establish Connection with MYSQL
	include "../includes/MySQLFunc.php";
	$sql_connection=sqlconnect();
	// Specify the query to Insert Record
	$sql = "insert into feedback(JobSeekId,Feedback,FeedbakDate) values('".$Id."','".$FeedBack."','".$FDate."')";
	// execute query
	sqlquery($sql);																	
	echo '<script type="text/javascript">alert("Feedback Submitted Succesfully");window.location=\'Feedback.php\';</script>';

?>
</body>
</html>
