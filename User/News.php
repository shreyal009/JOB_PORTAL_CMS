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
.style3 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: small;
	font-weight: bold;
	color: #192666;
}
.style4 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: small;
	font-weight: bold;
	color: #FFFFFF;
}
.style7 {font-size: small}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style9 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; }
-->
    </style>
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
.style10 {color: #192666}
-->
    </style>
    <style type="text/css">

.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}

.ds_tbl {
	background-color: #FFF;
}

.ds_head {
	background-color: #333;
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	text-align: center;
	letter-spacing: 2px;
}

.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}

.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	padding: 5px;
	cursor: pointer;
}

.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */

</style>
</head>
<body>

<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
<tr><td id="ds_calclass">
</td></tr>
</table>

<script type="text/javascript" src="../includes/dateFeature.js">
</script>


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
                    <td height="27" bgcolor="#A0B9F3"><span class="style4 style10">Create News</span></td>
                  </tr>
                  <tr>
                    <td height="26"><form id="form1" method="post" action="InsertNews.php">
                        <table width="100%" height="109" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td height="36"><span class="style9">News:</span></td>
                            <td>
                              <label>
                              <input required type="text" name="txtNews" id="txtNews" />
                              </label>
                              </td>
                          </tr>
                          <tr>
                            <td height="35"><span class="style9">News Date:</span></td>
                            <td>
                              <label>
                              <input required type="text" onclick="ds_sh(this);"  name="txtDate" id="txtDate" />
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
                    </form></td>
                  </tr>
                  <tr>
                    <td height="25" bgcolor="#A0B9F3"><span class="style3">News List</span></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                        <tr>
                          <th height="32" bgcolor="#1CB5F1"><div align="left" class="style12 style13 style7 style8">Id</div></th>
                          <th bgcolor="#1CB5F1"><div align="left" class="style11 style7 style8">News</div></th>
                          <th bgcolor="#1CB5F1"><div align="left" class="style11 style7 style8">Date</div></th>
                          <th height="32" bgcolor="#1CB5F1"><div align="left" class="style11 style7 style8">Edit</div></th>
                          <th bgcolor="#1CB5F1"><div align="left" class="style11 style7 style8">Delete</div></th>
                        </tr>
                        <?php
// Establish Connection with Database
include("../includes/MySQLFunc.php");
$sql_connection=sqlconnect();
// Specify the query to execute
$sql = "select * from news_master";
// Execute query
$result = sqlquery($sql);
// Loop through each records
$records=0;
if($result){ 
while($row = sqlfetcharray($result))
{
$Id=$row['NewsId'];
$News=$row['News'];
$NewsDate=$row['NewsDate'];
?>
                        <tr>
                          <td><div align="left" class="style11 style7 style8"><?php echo $Id;?></div></td>
                          <td><div align="left" class="style11 style7 style8"><?php echo $News;?></div></td>
                          <td><div align="left" class="style11 style7 style8"><?php echo $NewsDate;?></div></td>
                          <td><div align="left" class="style11 style7 style8"><a href="EditNews.php?NewsId=<?php echo $Id;?>">Edit</a></div></td>
                          <td><div align="left" class="style11 style7 style8"><a href="DeleteNews.php?NewsId=<?php echo $Id;?>">Delete</a></div></td>
                        </tr>
                        <?php
}
// Retrieve Number of records returned
$records = sqlnumrows($result);
}
?>
                        <tr>
                          <td colspan="5"><div align="left" class="style11 style7 style8"><?php echo "Total ".$records." Records"; ?> </div></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="26"><form method="post" action="InsertNews.php">
                      <table width="100%" height="109" border="0" cellpadding="0" cellspacing="0">
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
</div> 
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
</script><!-- /main -->
</body>
</html>
