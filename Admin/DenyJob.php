<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Id = $_GET['JobId'];
include("../includes/MySQLFunc.php");
$sql_connection=sqlconnect();
// Specify the query to Update Record
$sql = "DELETE FROM jobseeker_reg WHERE JobSeekId=".$Id.";";
echo $sql;
// Execute query
sqlquery($sql);
echo '<script type="text/javascript">alert("Profile rejected");window.location=\'ManageJob.php\';</script>';
?>
</body>
</html>
