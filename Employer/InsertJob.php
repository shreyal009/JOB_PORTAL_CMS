<?php
if (!isset($_SESSION)) 
{
  session_start();
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

	$txtTitle=$_POST['txtTitle'];
	$txtTotal=$_POST['txtTotal'];
	$cmbQual=$_POST['cmbQual'];
	$txtDesc=$_POST['txtDesc'];
	$Name=$_SESSION['Name'];
	if($cmbQual=="Other")
	{
	$cmbQual=$_POST['txtOther'];
	}
	// Establish Connection with MYSQL
	include "../includes/MySQLFunc.php";
	$sql_connection=sqlconnect();
	// Specify the query to Insert Record
	$sql = "Insert into job_master (CompanyName,JobTitle,Vacancy,MinQualification,Description) values('".$Name."','".$txtTitle."','".$txtTotal."','".$cmbQual."','".$txtDesc."')";
	// execute query
	sqlquery($sql);
	echo '<script type="text/javascript">alert("Job Posted Succesfully");window.location=\'ManageJob.php\';</script>';
?>
</body>
</html>
