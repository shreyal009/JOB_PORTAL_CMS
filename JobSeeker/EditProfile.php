<?php 
if(!isset($_SESSION))
{session_start();}

if(!isset($_SESSION['jobseeker']))
{
	echo '<script type="text/javascript">alert("Session expired, please login again");window.location=\'../index.php\';</script>';
}
?>
<!DOCTYPE html>
<html  lang="cs">
<head>
     <meta charset="UTF-8" />
    <meta name="description" content="A website to find Job in a reputed Company" />
    <meta name="keywords" content="Job, COMPANY,PORTAL, RECRUITER" />
    <meta name="author" content="Shreyal" />
    <meta http-equiv="refresh" content="" />
    
    <title>Edit Profile</title>
   
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="../css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="../css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="../css/aural.css" />
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

</head>
<body>

<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
<tr><td id="ds_calclass">
</td></tr>
</table>

    
</head>

<body id="www-url-cz">

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
                <h2><span><a href="#">Edit/View Your Profile</a></span></h2>
                    <div class="login">

                <form action="ProfileUpdate.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">

<?php
$ID=$_SESSION['ID'];
include "../includes/MySQLFunc.php";
$sql_connection=sqlconnect();
// Specify the query to execute
$sql = "select * from jobseeker_reg where JobSeekId='".$ID."'";
// Execute query
$result = sqlquery($sql);
// Loop through each records
if($result){ 
$row = sqlfetcharray($result)
?>

                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>Name:</td>
                      <td><span id="sprytextfield3">
                        <label>
	                        <input type="text" name="txtName" id="txtName" value="<?php echo $row['JobSeekerName'];?>"  />
                        </label>
                      </span></td>
                    </tr>
                   
                    <tr>
                      <td>Address:</td>
                      <td><span id="sprytextarea1">
                        <label>
                        <textarea name="txtAddress" id="txtAddress" cols="45" rows="5"><?php echo $row['Address'];?></textarea>
                        </label>
                      </span></td>
                    </tr>
                    <tr>
                      <td>City:</td>
                      <td><span id="sprytextfield4">
                        <label>
                        <input type="text" name="txtCity" id="txtCity" value="<?php echo $row['City'];?>"/>
                        </label>
                      <span class="textfieldRequiredMsg">Enter City</span></span></td>
                    </tr>
                    <tr>
                      <td>Email:</td>
                      <td><span id="sprytextfield5">
                        <label>
                        <input type="text" name="txtEmail" id="txtEmail" value="<?php echo $row['Email'];?>"/>
                        </label>
                      </span></td>
                    </tr>
                    <tr>
                      <td>Mobile:</td>
                      <td><span id="sprytextfield6">
                        <label>
                        <input type="text" name="txtMobile" id="txtMobile" value="<?php echo $row['Mobile'];?>"/>
                        </label>
                      </span></td>
                    </tr>
                    <tr>
                      <td>Qualification:</td>
                      <td><label>
                        <select name="cmbQual" id="cmbQual">
				<?php
					$sql_connection=sqlconnect();
					$sql="SELECT * FROM qualification_master ORDER BY qual_name;";
					$result=sqlquery($sql);
					do{			
							if($row['Qualification']==$row1['qual_name']){
			                           echo "<option value='".$row1['qual_name']."' selected>".$row1['qual_name']."</option>";
						}
						else
						{echo "<option value='".$row1['qual_name']."'>".$row1['qual_name']."</option>"; }
					}while($row1=sqlfetcharray($result));
				?>
				<option value="Other">Other</option>
                        </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td>Other:</td>
                      <td><label>
                        <input type="text" name="txtOther" id="txtOther"/>
                      </label></td>
                    </tr>
                    <tr>
                      <td>Gender:</td>
                      <td><label>
                        <select name="cmbGender" id="cmbGender">
			<?php
				if($row['Gender']=="Male"){
                          echo "<option value='Male' selected>Male</option>";
                          echo "<option value='Female'>Female</option>";				
				}
				else{
                          echo "<option value='Male'>Male</option>";
                          echo "<option value='Female' selected>Female</option>";				
				}
			?>
                        </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td>BirthDate:</td>
                      <td><span id="sprytextfield7">
                        <label>
                        <input type="text" name="txtBirthDate" onclick="ds_sh(this);" id="txtBirthDate"  value="<?php echo $row['BirthDate'];?>"/>
                        </label>
                      </span></td>
                    </tr>
                    <tr>
                      <td>Marksheet/Resume:</td>
                      <td><label>
                        <input type="file" name="txtFile" id="txtFile" />
                      </label></td>
                    </tr>
                    <tr>
                      <td>User Name:</td>
                    <td><span id="sprytextfield8">
                        <label>
                        <input type="text" name="txtUserName" id="txtUserName" value="<?php echo $row['UserName'];?>"/>
                        </label>
                      </span></td>
                    </tr>
                    <tr>
                      <td>Password:</td>
                      <td><label><span id="sprytextfield9">
                        <input type="password" name="txtPassword" id="txtPassword" value="<?php echo $row['Password'];?>"/>
                      </span></label></td>
                    </tr>
                    <tr>
                      <td>Security Question:</td>
                      <td><label>
                        <select name="cmbQue" id="cmbQue">
                          <option selected="selected">What is Your Pet Name?</option>
                          <option>Who is Your Favourite Person?</option>
                          <option>What is the Name of Your First School?</option>
                        </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td>Answer:</td>
                      <td><span id="sprytextfield10">
                        <label>
                        <input type="text" name="txtAnswer" id="txtAnswer" value="<?php echo $row['Answer'];?>"/>
                        </label>
                      </span></td>
                    </tr>
                    <tr>
                      <td colspan="2"><label>
                        <label></label>
                        <div align="center">
                          <input type="submit" name="button2" id="button2" value="Submit" />
                          </div>
                      </label></td>
                    </tr>
                  </table>
<?php } ?>
                 </form>
              </div>

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
