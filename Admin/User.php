<?php
if(!isset($_SESSION))
{session_start();}

if(!isset($_SESSION['admin']))
{
	echo '<script type="text/javascript">alert("Session expired, please login again");window.location=\'../index.php\';</script>';
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     <meta charset="UTF-8" />
    <meta name="description" content="A website to find Job in a reputed Company" />
    <meta name="keywords" content="Job, COMPANY,PORTAL, RECRUITER" />
    <meta name="author" content="Shreyal" />
    <meta http-equiv="refresh" content="" />
    
<title>JOB PORTAL</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
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
.style3 {font-weight: bold}
-->
    </style>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
            <p id="breadcrumbs">&nbsp;</p>
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
               

                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="27" bgcolor="#A0B9F3"><strong>Create New User</strong></td>
        </tr>
        <tr>
          <td height="26"><form id="form1" name="form1" method="post" action="InsertUser.php">
            <table width="100%" height="95" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td height="35"><span class="style10">User Type:</span></td>
                <td>
                  <select id="cmbUserLevel" name="cmbUserLevel">
			<option value='0'>Administrator</option>
			<option value='1'>User</option>
                  </select>
              </tr>
    
	            <tr>
                <td height="35"><span class="style10">User Name:</span></td>
                <td>
                  <label>
                  <input type="text" name="txtUserName" id="txtUserName" required/>
                  </label>
                 </td>
              </tr>
              <tr>
                <td><span class="style10">Password:</span></td>
                <td>
                  <label>
                  <input type="password" name="txtPassword" id="txtPassword" required/>
                  </label>
                  </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><label>
                  <input type="submit" name="button" id="button" value="Submit" />
                </label></td>
              </tr>
            </table>
                    </form>            </td>
        </tr>
        <tr>
          <td height="25" bgcolor="#A0B9F3"><strong>User List</strong></td>
        </tr>
        <tr>
          <td>
          <table width="100%" border="1" bordercolor="#1CB5F1" >
<tr>
<th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>UserName</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Edit</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Delete</div></th>
</tr>
<?php
// Establish Connection with Database
include("../includes/MySQLFunc.php");
$sql_connection=sqlconnect();
$sql = "select * from user_master WHERE UserLevel=1";
// Execute query
$result = sqlquery($sql);
// Loop through each records
$records=0;
if($result){ 
while($row = sqlfetcharray($result))
{
$Id=$row['UserId'];
$UserName=$row['UserName'];

?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $UserName;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><a href="EditUser.php?UserId=<?php echo $Id;?>">Edit</a></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><a href="DeleteUser.php?UserId=<?php echo $Id;?>">Delete</a></strong></div></td>
</tr>
<?php
}
// Retrieve Number of records returned
$records = sqlnumrows($result);
}
?>
<tr>
<td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
</tr>
</table>
          </td>
        </tr>
      </table>

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
