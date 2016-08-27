<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="A website to find Job in a reputed Company" />
    <meta name="keywords" content="Job, COMPANY,PORTAL, RECRUITER" />
    <meta name="author" content="Shreyal" />
    <meta http-equiv="refresh" content="30" />
    
    <title>Job PORTAL</title>
    
    
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
.style2 {font-weight: bold}
-->
    </style>
</head>

<body id="www-url-cz">


<!-- Main -->
<div id="main" class="box">
<?php 
include "includes/Header.php"
?>
<?php 
include "includes/menu.php"
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
                <h2><span><a href="#">Our Job Seekers</a></span></h2>
               

                <p>
                <table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
<tr>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Job Seeker Name</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>City</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Email</strong></div></th>
</tr>
<?php
// Establish Connection with Database
include("includes/MySQLFunc.php");
$sql_connection=sqlconnect();
// Specify the query to execute
$sql = "select * from jobseeker_reg where Status='Confirm'";
// Execute query
$result = sqlquery($sql);
// Loop through each records 
if($result){
while($row = mysqli_fetch_array($result))
{
$Name=$row['JobSeekerName'];
$City=$row['City'];
$Email=$row['Email'];

?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo "$Name";?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo "$City";?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo "$Email";?></strong></div></td>
</tr>
<?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
}
?>
</table>
    </td>
  </tr>
</table>
                </p>

                <div align="center"><a href="JobSeekerReg.php"><strong>New Job Seeker? Register Here</strong></a>                  </div>
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
include "includes/footer.php"
?>
</div> <!-- /main -->

</body>
</html>
