<?php
if(!isset($_SESSION))
{
	session_start();
}
if(!isset($_SESSION['employer']))
{
	echo '<script type="text/javascript">alert("Session expired, please login again");window.location=\'../index.php\';</script>';
}
?>


<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="A website to find Job in a reputed Company" />
    <meta name="keywords" content="Job, COMPANY,PORTAL, RECRUITER" />
    <meta name="author" content="Shreyal" />
    <meta http-equiv="refresh" content="" />
    
    <title>JOB PORTAL</title>
   
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
-->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
<?php 
include "Header.php"
?>
<?php 
include "menu.php"
?>   
<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">You are here: <a href="index.php">Home</a></p>
          <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

           
            <!-- /article -->

            <hr class="noscreen" />

           
            <!-- /article -->

            <hr class="noscreen" />
            
            <!-- Article -->
           
            <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
            <div class="article">
                <h2><span><a href="#">Welcome To Control Panel</a></span></h2>
               
<?php
$JobId=$_GET['JobId'];
$JobSeekId=$_GET['JobSeekId'];
$AppId=$_GET['AppId'];
$Status="Call Latter Send";
$Description=$_POST['txtDesc'];
// Establish Connection with MYSQL
$sql_connection=sqlconnect();
// Specify the query to Update Record
$sql = "Update application_master set Status='".$Status."' ,Description='".$Description."' where ApplicationId=".$AppId." and JobId='".$JobId."' and JobSeekId='".$JobSeekId."'";
// Execute query
sqlquery($sql);
echo '<script type="text/javascript">alert("Call Latter Send Succesfully");window.location=\'Application.php\';</script>';
?>
                
                <p>&nbsp;</p>

              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
include "right.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

</body>
</html>
