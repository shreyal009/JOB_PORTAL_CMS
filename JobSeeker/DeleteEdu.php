<?php
	// Establish Connection with MYSQL
	include "../includes/MySQLFunc.php";
	$sql_connection=sqlconnect();
	// Specify the query to Insert Record
	$JobSeekId=$_GET['JobSeekId'];
	$EduId=$_GET['EduId'];
	$sql = "DELETE FROM jobseeker_education WHERE JobSeekId=$JobSeekId and EduId=$EduId";
	// execute query
	sqlquery($sql);
	echo '<script type="text/javascript">window.location=\'Education.php\';</script>';
?>
</body>
</html>
