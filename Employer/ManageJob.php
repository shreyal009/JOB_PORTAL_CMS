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
<!--
.style3 {font-weight: bold}
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
                    <td bgcolor="#A0B9F3"><strong>Manage Job</strong></td>
                  </tr>
                  <tr>
                    <td><form id="form1" method="post" action="InsertJob.php">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><strong>Job Title:</strong></td>
                          <td><span id="sprytextfield1">
                            <label>
                            <input type="text" name="txtTitle" id="txtTitle" />
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td><strong>Total Vacancy:</strong></td>
                          <td><span id="sprytextfield2">
                            <label>
                            <input type="text" name="txtTotal" id="txtTotal" />
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
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
                            <input type="text" name="txtOther" id="txtOther" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><strong>Description:</strong></td>
                          <td><span id="sprytextarea1">
                            <label>
                            <textarea name="txtDesc" id="txtDesc" cols="25" rows="3"></textarea>
                            </label>
                          <span class="textareaRequiredMsg">A value is required.</span></span></td>
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
                    <td bgcolor="#A0B9F3"><strong>Posted Job </strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                      <tr>
                        <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Job Title</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Vacancy</strong></div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Qualification</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Description</strong></div></th>
                    
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Delete</div></th>
                      </tr>
                      <?php
// Establish Connection with Database
$sql_connection=sqlconnect();
// Specify the query to execute
$sql = "select * from job_master where CompanyName='".$_SESSION['Name']."'";
// Execute query
$result = sqlquery($sql);
// Loop through each records 
$records=0;
if($result)
{
while($row = sqlfetcharray($result))
{
$Id=$row['JobId'];
$JobTitle=$row['JobTitle'];
$Vacancy=$row['Vacancy'];
$MinQualification=$row['MinQualification'];
$Description =$row['Description'];

?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobTitle;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Vacancy;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $MinQualification;?></strong></div></td>
                            <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Description;?></strong></div></td>
                      
                        <td class="style3"><div align="left" class="style9 style5"><strong><a href="DeleteJob.php?JobId=<?php echo $Id;?>">Delete</a></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = sqlnumrows($result);
}
?>
                      <tr>
                        <td colspan="6" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
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
