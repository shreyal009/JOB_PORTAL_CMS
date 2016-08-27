<?php
if(!isset($_SESSION))
{session_start();}

if(!isset($_SESSION['user']))
{
	echo '<script type="text/javascript">alert("Session expired, please login again");window.location=\'../index.php\';</script>';
}
include "UpdateCompany.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.job.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.job.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
<title>Job Portal</title>
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
-->
    </style>
</head>

<body>
<!-- Main -->
<div id="main" class="box">
<?php 
include "../Admin/company_settings/company_info.php";
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
                <h2><span><a href="#">Company Settings</a></span></h2>
               <div class="login">

                <form action="CompanySettings.php" method="post" id="form2" enctype="multipart/form-data">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>Site Name:</td>
                      <td>
                        <label>
                        <input type="text" name="txtSiteName" id="txtSiteName" value="<?php echo $site_name ?>" required/>
                        </label>
                    </td>  
                    </tr>
                    <tr>
                      <td>Welcome Note for Home Page:</td>
                      <td>
                        <label>
                        <textarea name="txtWelcomeNote" id="txtWelcomeNote" cols="60" rows="15" required><?php echo $site_welcome_note ?></textarea>
                        </label>
                      <td>
                    </tr>
                    <tr>
                      <td>About Us:</td>
                      <td><span id="sprytextarea2">
                        <label>
                        <textarea name="txtAboutUs" id="txtAboutUs" cols="65" rows="5" required><?php echo $site_about_us ?></textarea>
                        </label>
                      </td>
                    </tr>
                    <tr>
                      <td>Email:</td>
                      <td>
                        <label>
                        <input type="email" name="txtEmail" id="txtEmail" value="<?php echo $contact_email ?>" required/>
                        </label>
                      </td>
                    </tr>
                    <tr>
                      <td>Mobile:</td>
                      <td>
                        <label>
                        <input type="text" maxlength="10"  pattern="[0-9]{10}" name="txtMobile" id="txtMobile" value="<?php echo $contact_phone ?>" required/>
                        </label>
                      </td>
                    </tr>
                    <tr>
                      <td>Address</td>
                      <td>
                        <label>
                        <textarea name="txtAddress" id="txtAddress" cols="45" rows="5" required><?php echo $contact_address ?></textarea>
                        </label>
                      </td>
                    </tr>
                    <tr>
                      <td>Select Banner Image:</td>
                    <td>
                        <label>
                        <input type="file" name="fileBanner" id="fileBanner"/>
                        </label>
		    </td>
                      
                    </tr>
                    <tr>
                      <td colspan="2"><label>
                        <div align="center">
                          <input type="submit" name="button2" id="button2" value="Submit" />
                          </div>
                      </label></td>
                    </tr>
                  </table>
                 </form>
              </div>
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
