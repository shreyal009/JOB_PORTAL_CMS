<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
<?php 
if(!isset($_SESSION))
{session_start();}

if(!isset($_SESSION['jobseeker']))
{
	echo '<script type="text/javascript">alert("Session expired, please login again");window.location=\'../index.php\';</script>';
}

	$Degree=$_POST['cmbQual'];
	$Uni=$_POST['txtBoard'];
	$Passing=$_POST['cmbYear'];
	$Per=$_POST['txtPer'];
	$Id=$_SESSION['ID'];
	if($Degree=="Other")
	{
		$Degree=$_POST['txtOther'];
	}
	// Establish Connection with MYSQL
	include "../includes/MySQLFunc.php";
	$sql_connection=sqlconnect();
	// Specify the query to Insert Record
	$sql = "insert into jobseeker_education(JobSeekId,Degree,University,PassingYear,Percentage) values('".$Id."','".$Degree."','".$Uni."','".$Passing."','".$Per."')";
	// execute query
	if(sqlquery ($sql)){		
		echo '<script type="text/javascript">alert("Profile Created Succesfully");window.location=\'Education.php\';</script>';
	}
	else
	{
		echo '<script type="text/javascript">alert("Unable to update records, please try again");window.location=\'Education.php\';</script>';
	}
?>
</body>
</html>
