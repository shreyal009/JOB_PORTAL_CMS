<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Approve Job Seeker</title>
</head>

<body>
<?php
$Id = $_GET['JobId'];
// Establish Connection with MYSQL
include("../includes/MySQLFunc.php");
$sql_connection=sqlconnect();
// Specify the query to Update Record
$sql = "Update jobseeker_reg set Status='Confirm' where JobSeekId=".$Id."";
// Execute query
sqlquery($sql);
echo '<script type="text/javascript">alert("Job Seeker Request Confirmed");window.location=\'ManageJob.php\';</script>';
?>
</body>
</html>
