<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Id = $_GET['Id'];
$Email = $_GET['Email'];
// Establish Connection with MYSQL
$sql_connection=sqlconnect();
// Specify the query to Update Record
$sql = "Update application_master set Status='Call Letter Send' where ApplicationId=".$Id."";
// Execute query
if(sqlquery($sql)){
echo '<script type="text/javascript">alert("Updated Succesfully");window.location=\'Application.php\';</script>';
}
else
{
	echo '<script type="text/javascript">alert("Error while updating records, please try again");window.location=\'Application.php\';</script>';
}
?>
</body>
</html>
