<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8" />
    <meta name="description" content="A website to find Job in a reputed Company" />
    <meta name="keywords" content="Job, COMPANY,PORTAL, RECRUITER" />
    <meta name="author" content="Shreyal" />
    <meta http-equiv="refresh" content="30" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Name=$_POST['txtName'];
	$Address=$_POST['txtAddress'];
	$City=$_POST['txtCity'];
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];
	$Qualification=$_POST['cmbQual'];
	$Gender=$_POST['cmbGender'];	
	$BirthDate=$_POST['txtBirthDate'];
	$path1 = $_FILES["txtFile"]["name"];
	$Status="Pending";
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$Question=$_POST['cmbQue'];
	$Answer=$_POST['txtAnswer'];
	$UserType="JobSeeker";
	if ($Qualification=="Other")
	{
		$Qualification=$_POST['txtOther'];
	}
	  move_uploaded_file($_FILES["txtFile"]["tmp_name"],"upload/"  .$_FILES["txtFile"]["name"]);
	// Establish Connection with MYSQL
	include("includes/MySQLFunc.php");
	$sql_connection=sqlconnect();
	#Password Hashing
	include("includes/PasswordHash.php");
	$phpass = new PasswordHash(8, TRUE);
	$Password = $phpass->HashPassword($Password);


	// Specify the query to Insert Record
	$sql = "insert into jobseeker_reg(JobSeekerName,Address,City,Email,Mobile,Qualification,Gender,BirthDate,Resume,Status,UserName,Password,Question,Answer) values('".$Name."','".$Address."','".$City."','".$Email."',".$Mobile.",'".$Qualification."','".$Gender."','".$BirthDate."','".$path1."','".$Status."','".$UserName."','".$Password."','".$Question."','".$Answer."')";
	// execute query
	if(sqlquery ($sql)){
	echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';
	}
	else
	{
		echo '<script type="text/javascript">alert("Username already exists, Please try different username.");window.location=\'index.php\';</script>';
	}

?>
</body>
</html>
