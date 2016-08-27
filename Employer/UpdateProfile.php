<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$txtId = $_POST['txtId'];
$txtName=$_POST['txtName'];
$txtContact=$_POST['txtContact'];
$txtAddress = $_POST['txtAddress'];
$txtCity=$_POST['txtCity'];
$txtEmail=$_POST['txtEmail'];
$txtMobile = $_POST['txtMobile'];
$txtArea=$_POST['txtArea'];
$txtUser=$_POST['txtUser'];
$txtPassword=$_POST['txtPassword'];
// Establish Connection with MYSQL
$sql_connection=sqlconnect();
// Specify the query to Update Record
$sql = "Update employer_reg  set CompanyName='".$txtName."',ContactPerson='".$txtContact."',Address='".$txtAddress."',City='".$txtCity."',Email='".$txtEmail."',Mobile='".$txtMobile."',Area_Work='".$txtArea."',UserName='".$txtUser."',Password='".$txtPassword."' where EmployerId=".$txtId."";
// Execute query
if(sqlquery($sql)){
echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'Profile.php\';</script>';
}
else{
echo '<script type="text/javascript">alert("Error while updating records, please try again");window.location=\'Profile.php\';</script>';
}
?>
</body>
</html>
