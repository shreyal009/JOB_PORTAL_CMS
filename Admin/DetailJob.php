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
               

                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
                    <?php
$ID=$_GET['JobId'];
include("../includes/MySQLFunc.php");
$sql_connection=sqlconnect();
// Specify the query to execute
$sql = "select * from jobseeker_reg where JobSeekId='".$ID."'  ";
// Execute query
$result = sqlquery($sql);
// Loop through each records
if($result){
$row = sqlfetcharray($result)
?>
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                 <tr>
                    <td>Id:</td>
                    <td><?php echo $row['JobSeekId'];?></td>
                  </tr>
                  <tr>
                    <td>Name:</td>
                    <td><?php echo $row['JobSeekerName'];?></td>
                  </tr>
                  <tr>
                    <td>Address:</td>
                    <td><?php echo $row['Address'];?></td>
                  </tr>
                  <tr>
                    <td>City:</td>
                    <td><?php echo $row['City'];?></td>
                  </tr>
                  <tr>
                    <td>Email:</td>
                    <td><?php echo $row['Email'];?></td>
                  </tr>
                  <tr>
                    <td>Mobile:</td>
                    <td><?php echo $row['Mobile'];?></td>
                  </tr>
                  <tr>
                    <td>Highest Qualification:</td>
                    <td><?php echo $row['Qualification'];?></td>
                  </tr>
                  <tr>
                    <td>Gender:</td>
                    <td><?php echo $row['Gender'];?></td>
                  </tr>
                  <tr>
                    <td>Birth Date:</td>
                    <td><?php echo $row['BirthDate'];?></td>
                  </tr>
                  <tr>
                    <td>Resume:</td>
                    <td><a href="../upload/<?php echo $row['Resume'];?>" target="_blank">View</a></td>
                  </tr>
                  <tr>
                    <td><strong><a href="ApprovJob.php?JobId=<?php echo $row['JobSeekId'];?>">Approve Job Seeker</a></strong></td>
                    
                    <td><strong><a href="DenyJob.php?JobId=<?php echo $row['JobSeekId'];?>">Deny Job Seeker</a></strong></td>
                    
                  </tr>
                </table>
                    </td>
                  </tr>
                </table>
		<?php } ?>
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
