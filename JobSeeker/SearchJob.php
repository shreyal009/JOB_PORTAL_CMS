<?php 
if(!isset($_SESSION))
{session_start();}

if(!isset($_SESSION['jobseeker']))
{
	echo '<script type="text/javascript">alert("Session expired, please login again");window.location=\'../index.php\';</script>';
}
?>
<?php require_once('../includes/MySQLFunc.php'); 
	$sql_connection=sqlconnect();?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

//  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$currentPage = $_SERVER["PHP_SELF"];

$query_Recordset1 = "SELECT MinQualification FROM job_master";
$Recordset1 = sqlquery($query_Recordset1);
$row_Recordset1 = sqlfetcharray($Recordset1);
$totalRows_Recordset1 = sqlnumrows($Recordset1);

$query_Recordset3 = "SELECT job_master.JobId, job_master.CompanyName, job_master.JobTitle, application_master.Status, application_master.JobSeekId, application_master.Description FROM application_master, job_master WHERE application_master.JobId=job_master.JobId";
$Recordset3 = sqlquery($query_Recordset3);
$row_Recordset3 = sqlfetcharray($Recordset3);
$totalRows_Recordset3 = sqlnumrows($Recordset3);

$query_Recordset4 = "SELECT distinct CompanyName FROM job_master";
$Recordset4 = sqlquery($query_Recordset4);
$row_Recordset4 = sqlfetcharray($Recordset4);
$totalRows_Recordset4 = sqlnumrows($Recordset4);

$query_Recordset5 = "SELECT distinct JobTitle FROM job_master";
$Recordset5 = sqlquery($query_Recordset5);
$row_Recordset5 = sqlfetcharray($Recordset5);
$totalRows_Recordset5 = sqlnumrows($Recordset5);

$colname_Recordset2 = "-1";
if (isset($_POST['cmbQual'])) {
  $colname_Recordset2 = $_POST['cmbQual'];
}
$colname2_Recordset2 = "-1";
if (isset($_POST['cmbCompany'])) {
  $colname2_Recordset2 = $_POST['cmbCompany'];
}
$colname3_Recordset2 = "-1";
if (isset($_POST['cmbArea'])) {
  $colname3_Recordset2 = $_POST['cmbArea'];
}

$query_Recordset2 = sprintf("SELECT * FROM job_master WHERE MinQualification = %s and CompanyName=%s and JobTitle=%s", GetSQLValueString($colname_Recordset2, "text"),GetSQLValueString($colname2_Recordset2, "text"),GetSQLValueString($colname3_Recordset2, "text"));
$Recordset2 = sqlquery($query_Recordset2);
$row_Recordset2 = sqlfetcharray($Recordset2);
$totalRows_Recordset2 = sqlnumrows($Recordset2);

$queryString_Recordset2 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset2") == false && 
        stristr($param, "totalRows_Recordset2") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset2 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset2 = sprintf("&totalRows_Recordset2=%d%s", $totalRows_Recordset2, $queryString_Recordset2);
?>
<!DOCTYPE html>
<html  lang="cs">
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
.style2 {font-weight: bold}
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
                <h2><span><a href="#">Search Job</a></span></h2>
               

                <form id="form1" method="post" action="SearchJob.php">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><strong>Select Qualification:</strong></td>
                      <td><label>
                      <select name="cmbQual" id="cmbQual">
                        <?php
do {  
?>
                        <option value="<?php echo $row_Recordset1['MinQualification']?>"><?php echo $row_Recordset1['MinQualification']?></option>
                        <?php
} while ($row_Recordset1 = sqlfetcharray($Recordset1));
  $rows = sqlnumrows($Recordset1);
  if($rows > 0) {
	  $row_Recordset1 = sqlfetcharray($Recordset1);
  }
?>
                      </select>
                      </label></td>
                      <td><label></label></td>
                    </tr>
                    <tr>
                      <td><strong>Select Compnay Name:</strong></td>
                      <td><label>
                        <select name="cmbCompany" id="cmbCompany">
                          <?php
do {  
?>
                          <option value="<?php echo $row_Recordset4['CompanyName']?>"><?php echo $row_Recordset4['CompanyName']?></option>
                          <?php
} while ($row_Recordset4 = sqlfetcharray($Recordset4));
  $rows = sqlnumrows($Recordset4);
  if($rows > 0) {
        $row_Recordset4 = sqlfetcharray($Recordset4);
  }
?>
                        </select>
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>Select Area of Work:</strong></td>
                      <td><label>
                        <select name="cmbArea" id="cmbArea">
                          <?php
do {  
?>
                          <option value="<?php echo $row_Recordset5['JobTitle']?>"><?php echo $row_Recordset5['JobTitle']?></option>
                          <?php
} while ($row_Recordset5 = sqlfetcharray($Recordset5));
  $rows = sqlnumrows($Recordset5);
  if($rows > 0) {
        $row_Recordset5 = sqlfetcharray($Recordset5);
  }
?>
                      </select>
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><input type="submit" name="button" id="button" value="Search" /></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
              </form>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="100%">&nbsp;
                     
                        <?php
						if ($totalRows_Recordset2!=0) 
						{
						do { ?>
                          <table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                          <td><strong>JobId</strong></td>
                          <td><strong><?php echo $row_Recordset2['JobId']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>CompanyName</strong></td>
                          <td><strong><?php echo $row_Recordset2['CompanyName']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>JobTitle</strong></td>
                          <td><strong><?php echo $row_Recordset2['JobTitle']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>Vacancy</strong></td>
                          <td><strong><?php echo $row_Recordset2['Vacancy']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>MinQualification</strong></td>
                           <td><strong><?php echo $row_Recordset2['MinQualification']; ?></strong></td>
                           </tr>
                           <tr>
                          <td><strong>Description</strong></td>
                          <td><strong><?php echo $row_Recordset2['Description']; ?></strong></td>
                        </tr>
                           <tr>
                             <td>&nbsp;</td>
                             <td><a href="Apply.php?JobId=<?php echo $row_Recordset2['JobId'];?>"><strong>Apply For Job</strong></a></td>
                           </tr>
                        </table>
                        <?php } while ($row_Recordset2 = sqlfetcharray($Recordset2)); 
						  
						  ?>
                      </table>
                      <?php
			  }
			else{
			?>
				<strong>No matching jobs found</strong>
			<?php	}?>
                      	</td>
                  </tr>
                </table>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>All Jobs</strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Company Name</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Job Title</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Status</strong></div></th>
                         <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Description</strong></div></th>
                      </tr>
                      <?php
// Specify the query to execute
$sql = "SELECT job_master.JobId, job_master.CompanyName, job_master.JobTitle, application_master.Status, application_master.JobSeekId, application_master.Description
FROM application_master, job_master
WHERE application_master.JobId=job_master.JobId and application_master.JobSeekId='".$_SESSION['ID']."'";
// Execute query
$result = sqlquery($sql);
// Loop through each records 
while($row = sqlfetcharray($result))
{
$CompanyName=$row['CompanyName'];
$JobTitle=$row['JobTitle'];
$Status=$row['Status'];
$Description=$row['Description'];
?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CompanyName;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobTitle;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Status;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Description;?></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = sqlnumrows($result);
?>
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
<?php
?>
