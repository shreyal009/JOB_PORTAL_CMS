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
                <h2><span><a href="#">Welcome To Control Panel</a></span></h2>
               

                <table width="100%" border="0" bordercolor="#1CB5F1" >
                  <tr>
                    <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Job Seeker Name</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Feedback</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Date</div></th>
                  </tr>
                  <?php
// Establish Connection with Database
include("../includes/MySQLFunc.php");
$sql_connection=sqlconnect();
// Specify the query to execute
$sql = "select FeedbackId,Feedback,FeedbakDate,JobSeekerName from feedback,jobseeker_reg where feedback.JobSeekId=jobseeker_reg.JobSeekId";
// Execute query
$result = sqlquery($sql);
// Loop through each records
$records=0;
if($result){ 
while($row = sqlfetcharray($result))
{
$Id=$row['FeedbackId'];
$Name=$row['JobSeekerName'];
$Feedback=$row['Feedback'];
$FeedbakDate=$row['FeedbakDate'];

?>
                  <tr>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Feedback;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $FeedbakDate;?></strong></div></td>
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
?>
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
