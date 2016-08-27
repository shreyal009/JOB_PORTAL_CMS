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
session_start();
$UserName=$_POST['txtUserName'];
$Question=$_POST['cmbQue'];
$Answer=$_POST['txtAnswer'];
$UserType=$_POST['rdUser'];

include("includes/MySQLFunc.php");
$sql_connection=sqlconnect();
if($UserType=="Employer")
{
$sql = "select * from employer_reg  where UserName='".$UserName."' and Question='".$Question."' and Answer='".$Answer."'";
$result = sqlquery($sql);
$records=0;
if($result){
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
}

if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'Forget.php\';</script>';
}
else
{
session_destroy();
session_start();
$_SESSION['ID']=$row['EmployerId'];
$_SESSION['Name']=$row['CompanyName'];
$_SESSION['employer']=1;
header("location:Employer/index.php");
} 
}
else
{
$sql = "select * from jobseeker_reg  where UserName='".$UserName."' and Question='".$Question."' and Answer='".$Answer."'";
$result = sqlquery($sql);
$records=0;
if($result){
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
}
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'Forget.php\';</script>';
}
else
{
session_destroy();
session_start();
$_SESSION['ID']=$row['JobSeekId'];
$_SESSION['Name']=$row['JobSeekerName'];
$_SESSION['jobseeker']=1;
header("location:JobSeeker/index.php");
} 
}
?>
</body>
</html>
