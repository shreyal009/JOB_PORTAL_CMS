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

<style type="text/css">
<!--
.style3 {font-weight: bold}
-->
</style>
</head>
<body>

<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
<tr><td id="ds_calclass">
</td></tr>
</table>


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
                <h2><span><a href="#">Welcome <?php echo $_SESSION['Name'];?></a></span></h2>
               

                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Manage Walkin</strong></td>
                  </tr>
                  <tr>
                    <td><form id="form1" method="post" action="InsertWalkin.php">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><strong>Job Title:</strong></td>
                          <td>
                            <label>
                            <input required type="text" name="txtTitle" id="txtTitle" />
                            </label>
                          </td>
                        </tr>
                        <tr>
                          <td><strong>Total Vacancy:</strong></td>
                          <td>
                            <label>
                            <input required type="text" name="txtTotal" id="txtTotal" />
                            </label>
                          </td>
                        </tr>
                        <tr>
                          <td><strong>Qualification:</strong></td>
                          <td><select name="cmbQual" id="cmbQual">
                            <?php
					include "../includes/MySQLFunc.php";
					$sql_connection=sqlconnect();
					$sql="SELECT * FROM qualification_master ORDER BY qual_name;";
					$result=sqlquery($sql);
					do{		
							echo $row['qual_name'];		
			                           echo "<option value='".$row['qual_name']."'>".$row['qual_name']."</option>";
					}while($row=sqlfetcharray($result));
				?>
				<option value="Other">Other</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td><strong>Other:</strong></td>
                          <td><label>
                            <input required type="text" name="txtOther" id="txtOther" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><strong>Description:</strong></td>
                          <td>
                            <label>
                            <textarea required name="txtDesc" id="txtDesc" cols="25" rows="3"></textarea>
                            </label>
                          </td>
                        </tr>
                        <tr>
                          <td><strong>Interview Date:</strong></td>
                          <td>
                            <label>
                            <input type="text" required name="txtDate" onclick="ds_sh(this);" id="txtDate" />
                            </label>
                          </td>
                        </tr>
                        <tr>
                          <td><strong>Interview Time:</strong></td>
                          <td>
                            <label>
                            <input type="text" name="txtTime" id="txtTime" />
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
                                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Posted Walkin </strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                      <tr>
                        <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Job Title</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Vacancy</strong></div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Qualification</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Description</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Date</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Time</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Delete</div></th>
                      </tr>
                      <?php
// Specify the query to execute
$sql = "select * from walkin_master where CompanyName='".$_SESSION['Name']."'";
// Execute query
$result = sqlquery($sql);
// Loop through each records 
$records=0;
if($result){
while($row = sqlfetcharray($result))
{
$Id=$row['WalkInId'];
$JobTitle=$row['JobTitle'];
$Vacancy=$row['Vacancy'];
$MinQualification=$row['MinQualification'];
$Description=$row['Description'];
$InterviewDate=$row['InterviewDate'];
$InterviewTime=$row['InterviewTime'];

?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobTitle;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Vacancy;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $MinQualification;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Description;?></strong></div></td>
                             <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $InterviewDate;?></strong></div></td>
                                 <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $InterviewTime;?></strong></div></td>
                      
                        <td class="style3"><div align="left" class="style9 style5"><strong><a href="DeleteWalkin.php?WalkinId=<?php echo $Id;?>">Delete</a></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = sqlnumrows($result);
}
?>
                      <tr>
                        <td colspan="8" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
                      </tr>
                    </table></td>
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
