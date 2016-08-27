<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8" />
    <meta name="description" content="A website to find Job in a reputed Company" />
    <meta name="keywords" content="Job, COMPANY,PORTAL, RECRUITER" />
    <meta name="author" content="Shreyal" />
    <meta http-equiv="refresh" content="" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$CompnayName=$_POST['txtName'];
	$ContactPerson=$_POST['txtPerson'];
	$Address=$_POST['txtAddress'];
	$City=$_POST['txtCity'];
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];
	$Area=$_POST['txtAreaWork'];
	$Status="Pending";
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$UserType="Employer";
	$Question=$_POST['cmbQue'];
	$Answer=$_POST['txtAnswer'];
	$logo_name=$_FILES['fileLogo']["name"];
	$logo_tmp=$_FILES['fileLogo']['tmp_name'];
	#Password Hashing
	include("includes/PasswordHash.php");
	$phpass = new PasswordHash(8, TRUE);
	$Password = $phpass->HashPassword($Password);

	// Establish Connection with MYSQL
	include("includes/MySQLFunc.php");
	$sql_connection=sqlconnect();
	

	// Specify the query to Insert Record
	if($logo_tmp!=""){
	
	$sql = "insert into employer_reg (CompanyName,ContactPerson,Address,City,Email,Mobile,Area_Work,Status,Logo,UserName,Password,Question,Answer) values('".$CompnayName."','".$ContactPerson."','".$Address."','".$City."','".$Email."',".$Mobile.",'".$Area."','".$Status."','".$logo_name."','".$UserName."','".$Password."','".$Question."','".$Answer."')";
	move_uploaded_file($logo_tmp,"Employer/logos/".$logo_name);
}
else
{
	$sql = "insert into employer_reg (CompanyName,ContactPerson,Address,City,Email,Mobile,Area_Work,Status,UserName,Password,Question,Answer) values('".$CompnayName."','".$ContactPerson."','".$Address."','".$City."','".$Email."',".$Mobile.",'".$Area."','".$Status."','".$UserName."','".$Password."','".$Question."','".$Answer."')";

}	
// execute query
if(sqlquery ($sql)){
		echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'loginorsignup.php\';</script>';
	}
	else
	{
		echo '<script type="text/javascript">alert("Username already exists, Please try different username.");window.location=\'EmployerReg.php\';</script>';
	}

?>
</body>
</html>
