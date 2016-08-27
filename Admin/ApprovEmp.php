<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Approve Employer</title>
</head>

<body>
<?php
$Id = $_GET['EmpId'];
// Establish Connection with MYSQL
include("../includes/MySQLFunc.php");
$sql_connection=sqlconnect();
// Specify the query to Update Record
$sql = "Update employer_reg set Status='Confirm' where EmployerId=".$Id."";
// Execute query
sqlquery($sql);
echo '<script type="text/javascript">alert("Employer Request Confirmed");window.location=\'ManageEmployer.php\';</script>';
?>
</body>
</html>
