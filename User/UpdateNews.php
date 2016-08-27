<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Id = $_POST['txtNewsId'];
$News=$_POST['txtNews'];
$Date=$_POST['txtNewsDate'];
// Establish Connection with MYSQL
include("../includes/MySQLFunc.php");
$sql_connection=sqlconnect();
// Specify the query to Update Record
$sql = "Update news_master set News='".$News."',NewsDate='".$Date."' where NewsId=".$Id."";
// Execute query
sqlquery($sql);
echo '<script type="text/javascript">alert("News Updated Succesfully");window.location=\'News.php\';</script>';
?>
</body>
</html>
