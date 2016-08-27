<?php session_start(); ?>
<!DOCTYPE html>
<html >
<head>
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
	$Status="Confirm";
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$Question=$_POST['cmbQue'];
	$Answer=$_POST['txtAnswer'];
	$UserType="JobSeeker";
		include("../includes/PasswordHash.php");
	$phpass = new PasswordHash(8, TRUE);
	$Password = $phpass->HashPassword($Password);
	if ($Qualification=="Other")
	{
		$Qualification=$_POST['txtOther'];
	}
	if($_FILES["txtFile"]["tmp_name"]!=""){
		$sql = "UPDATE jobseeker_reg SET JobSeekerName='".$Name."',Address='".$Address."',City='".$City."',Email='".$Email."',Mobile=".$Mobile.",Qualification='".$Qualification."',Gender='".$Gender."',BirthDate='".$BirthDate."',Resume='".$path1."',Status='".$Status."',UserName='".$UserName."',Password='".$Password."',Question='".$Question."',Answer='".$Answer."' WHERE JobSeekId=".$_SESSION['ID'];
	
		move_uploaded_file($_FILES["txtFile"]["tmp_name"],"upload/"  .$_FILES["txtFile"]["name"]);
	}
	else
	{
				$sql = "UPDATE jobseeker_reg SET JobSeekerName='".$Name."',Address='".$Address."',City='".$City."',Email='".$Email."',Mobile=".$Mobile.",Qualification='".$Qualification."',Gender='".$Gender."',BirthDate='".$BirthDate."',Status='".$Status."',UserName='".$UserName."',Password='".$Password."',Question='".$Question."',Answer='".$Answer."' WHERE JobSeekId=".$_SESSION['ID'].";";

	}
	// Establish Connection with MYSQL
	include("../includes/MySQLFunc.php");
	$sql_connection=sqlconnect();
	// execute query
	if(sqlquery ($sql)){
		echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'index.php\';</script>';
	}
	else
	{
		echo '<script type="text/javascript">alert("Sorry, Error occured during udating profile.");window.location=\'index.php\';</script>';
	}

?>
</body>
</html>
