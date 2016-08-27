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
	$txtDate=$_POST['txtDate'];
	$txtTime=$_POST['txtTime'];
	$Name=$_SESSION['Name'];
	if($cmbQual=="Other")
	{
		$cmbQual=$_POST['txtOther'];
	}
	// Establish Connection with MYSQL
	include "../includes/MySQLFunc.php";	
	$sql_connection=sqlconnect();
	// Specify the query to Insert Record
	$sql = "insert into walkin_master (CompanyName,JobTitle,Vacancy,MinQualification,Description,InterviewDate,InterviewTime) values('".$Name."','".$txtTitle."','".$txtTotal."','".$cmbQual."','".$txtDesc."','".$txtDate."','".$txtTime."')";
	// execute query
	sqlquery ($sql);
	echo '<script type="text/javascript">alert("Walkin Inserted Succesfully");window.location=\'ManageWalkin.php\';</script>';

?>
</body>
</html>
