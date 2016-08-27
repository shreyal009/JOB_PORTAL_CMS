<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Id = $_POST['txtUserId'];
$Name=$_POST['txtUserName'];
$Password=$_POST['txtPass'];


	include("../includes/PasswordHash.php");
	$phpass = new PasswordHash(8, TRUE);
	$Password = $phpass->HashPassword($Password);

// Establish Connection with MYSQL
include("../includes/MySQLFunc.php");
$sql_connection=sqlconnect();
// Specify the query to Update Record
$sql = "Update user_master set UserName='".$Name."',Password='".$Password."' where UserId=".$Id."";
// Execute query
sqlquery($sql);
echo '<script type="text/javascript">alert("User Updated Succesfully");window.location=\'User.php\';</script>';
?>
</body>
</html>
