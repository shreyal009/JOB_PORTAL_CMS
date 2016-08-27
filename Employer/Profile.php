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
               <?php
$ID=$_SESSION['ID'];
// Establish Connection with Database
include "../includes/MySQLFunc.php";
$sql_connection=sqlconnect();
// Specify the query to execute
$sql = "select * from employer_reg where EmployerId ='".$ID."'  ";
// Execute query
$result = sqlquery($sql);
// Loop through each records 
$row = sqlfetcharray($result)
?>
                <table width="100%" border="0" cellspacing="2" cellpadding="2">
                  <tr>
                    <td><strong>Company ID:</strong></td>
                    <td><?php echo $row['EmployerId'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Company Name:</strong></td>
                    <td><?php echo $row['CompanyName'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Contact Person:</strong></td>
                    <td><?php echo $row['ContactPerson'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Address:</strong></td>
                    <td><?php echo $row['Address'];?></td>
                  </tr>
                  <tr>
                    <td><strong>City:</strong></td>
                    <td><?php echo $row['City'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td><?php echo $row['Email'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Mobile:</strong></td>
                    <td><?php echo $row['Mobile'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Area of Work:</strong></td>
                    <td><?php echo $row['Area_Work'];?></td>
                  </tr>
                  <tr>
                    <td><strong>User Name:</strong></td>
                    <td><?php echo $row['UserName'];?></td>
                  </tr>
                  
                  <tr>
                    <td>&nbsp;</td>
                    <td><a href="EditProfile.php?EmployerId=<?php echo $row['EmployerId']; ?>">Edit Profile</a></td>
                  </tr>
                </table>

              <p>&nbsp;</p>

                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->



    </div> <!-- /page-in -->
    </div> <!-- /page -->

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

<?php
include "footer.php"
?>
</div> <!-- /main -->

</body>
</html>
