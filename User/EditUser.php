<?php
if(!isset($_SESSION))
{session_start();}

if(!isset($_SESSION['user']))
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
    <meta http-equiv="refresh" content="30" />
    
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
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; color: #FFFFFF; }
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; }
-->
    </style>
    <style type="text/css">
<!--
.style11 {color: #192666}
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
               

                <table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="33" bgcolor="#A0B9F3"><span class="style10 style11">Edit Record</span></td>
                  </tr>
                  <tr>
                    <td><?php
$Id=$_GET['UserId'];
// Establish Connection with Database
include("../includes/MySQLFunc.php");
$sql_connection=sqlconnect();
// Specify the query to execute
$sql = "select * from user_master where UserId=".$Id."";
// Execute query
$result = sqlquery($sql);
// Loop through each records
$records=0;
if($result){ 
while($row = sqlfetcharray($result))
{
$Id=$row['UserId'];
$Name=$row['UserName'];
$Password=$row['Password'];
}
?>
                        <form method="post" action="UpdateUser.php">
                          <table width="100%" border="0">
                            <tr>
                              <td height="32"><span class="style8">User Id</span></td>
                              <td>
                                <label>
                                <input required name="txtUserId" readonly="true" type="text" id="txtUserId" value="<?php echo $Id;?>" />
                                </label>
                                </td>
                            </tr>
                            <tr>
                              <td height="36"><span class="style8">User Name:</span></td>
                              <td>
                                <label>
                                <input required name="txtUserName" type="text" id="txtUserName" value="<?php echo $Name;?>" />
                                </label>
                                </td>
                            </tr>
                            <tr>
                              <td height="36"><span class="style8">Password:</span></td>
                              <td>
                                <label>
                                <input required name="txtPass" type="password" id="txtPass" value="<?php echo $Password;?>" />
                                </label>
                                </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><input required type="submit" name="submit" value="Update Record" /></td>
                            </tr>
</table>
                        </form>
          		<?php } ?>
                        <form method="post" action="UpdateUser.php">
                          <table width="100%" border="0">
                          </table>
                        </form></td>
                  </tr>
                </table>
                <p>&nbsp;</p>

              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->



    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->
<script type="text/javascript">

window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "job-navbar" + " job-card-2" + " job-animate-top" + " job-white";
    } else {
        navbar.className = navbar.className.replace(" job-card-2 job-animate-top job-white", "");
    }
}
</script>
</body>
</html>
