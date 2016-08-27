<?php
session_start();
$UserName=$_POST['txtUser'];
$Password=$_POST['txtPass'];
$UserType=$_POST['cmbUser'];
#Password Hashing
include("includes/PasswordHash.php");
$phpass = new PasswordHash(8, TRUE);		
include("includes/MySQLFunc.php");
$sql_connection=sqlconnect();
if($UserType=="Administrator")
{
$sql = "select * from user_master where UserName='".$UserName."' and UserLevel=0";
$result = sqlquery($sql);
if($result){
	$records = sqlnumrows($result);
	$row = sqlfetcharray($result);
	if ($records==0)
	{
		echo '<script type="text/javascript">alert("Wrong UserName");window.location=\'loginorsignup.php\';</script>';
	}
	else if(!($phpass->CheckPassword($Password,$row['Password'])))
	{
		echo '<script type="text/javascript">alert("Wrong Password");window.location=\'loginorsignup.php\';</script>';
	}
	else
	{
		session_unset();
		$_SESSION['ID']=$row['UserId'];
		$_SESSION['Name']=$row['UserName'];
		$_SESSION['admin']=1;
		header("location:Admin/index.php");
		//echo '<script type="text/javascript">window.location=\'Admin/loginorsignup.php\';</script>';
	}
}
}
else if($UserType=="User")
{
$sql = "select * from user_master where UserName='".$UserName."' and UserLevel=1";
$result = sqlquery($sql);
if($result){
	$records = sqlnumrows($result);
	$row = sqlfetcharray($result);
	if ($records==0)
	{
		echo '<script type="text/javascript">alert("Wrong UserName");window.location=\'loginorsignup.php\';</script>';
	}
	else if(!($phpass->CheckPassword($Password,$row['Password'])))
	{
		echo '<script type="text/javascript">alert("Wrong Password");window.location=\'loginorsignup.php\';</script>';
	}
	else
	{
		session_unset();
		$_SESSION['ID']=$row['UserId'];
		$_SESSION['Name']=$row['UserName'];
		$_SESSION['user']=1;
		header("location:User/index.php");
	}
}
}

else if($UserType=="JobSeeker")
{
	$sql = "select * from jobseeker_reg where UserName='".$UserName."';";
	$result = sqlquery($sql);
	if($result){
	$records = sqlnumrows($result);
	$row = sqlfetcharray($result);
	if ($records==0)
	{
		echo '<script type="text/javascript">alert("Wrong UserName");window.location=\'loginorsignup.php\';</script>';
	}
	else if(!($phpass->CheckPassword($Password,$row['Password'])))
	{
		echo '<script type="text/javascript">alert("Wrong Password");window.location=\'loginorsignup.php\';</script>';
	}
	else
	{
		if($row['Status']=="Pending"){
			echo '<script type="text/javascript">alert("Your Account has not been activated by admin yet.");window.location=\'loginorsignup.php\';</script>';
		}
		else{
		session_unset();
		$_SESSION['ID']=$row['JobSeekId'];
		$_SESSION['Name']=$row['JobSeekerName'];
		$_SESSION['jobseeker']=1;
		header("location:JobSeeker/index.php");
		} 
	}
}
}
else
{
	$sql = "select * from employer_reg where UserName='".$UserName."';";
	$result = sqlquery($sql);
	if($result)
	{
		$records = sqlnumrows($result);
		$row = sqlfetcharray($result);
		if ($records==0)
		{
			echo '<script type="text/javascript">alert("Wrong UserName");window.location=\'loginorsignup.php\';</script>';
		}
		else if(!($phpass->CheckPassword($Password,$row['Password'])))
		{
			echo '<script type="text/javascript">alert("Wrong Password");window.location=\'loginorsignup.php\';</script>';
		}
		else
		{
		if($row['Status']=="Pending"){
			echo '<script type="text/javascript">alert("Your Account has not been activated by admin yet.");window.location=\'loginorsignup.php\';</script>';
		}
		else{
			session_unset();
			$_SESSION['ID']=$row['EmployerId'];
			$_SESSION['Name']=$row['CompanyName'];
			$_SESSION['employer']=1;
			header("location:Employer/index.php");
		}
	}
	}
}
?>
