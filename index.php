<?php require "checkInstall.php";?>
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
.style2 {
	font-size: medium;
	font-weight: bold;
}
-->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
<?php 
include "Admin/company_settings/company_info.php";
include "includes/Header.php";
?>
<?php 
include "includes/menu.php";
include "includes/company.php";
?>   

<div class="job-content job-container job-padding-64" id="about">
  <h3 class="job-center">Welcome To Job PORTAL</h3>
  <p class="job-center"><?php echo $site_welcome_note ?></p>
  <div class="job-row">
    <div class="">
    <!--job-col m6 job-center job-section-->
      <p><b>My Name</b></p><br>
      <img src=<?php echo "Admin/design/".$site_banner_image?> class="" width="100%" height="345px" style=" box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);" alt="Photo of Me">
    </div>
    </div>
  </div>
<div class="job-content job-container job-padding-64">
  <h3 class="job-center">EMPLOYERS OF CHOICE........</h3>
  <p class="job-center"><em>I'd love your feedback!</em></p>
<?php
$log_directory="./Employer/upload";
$results_array=array();
$results_array=array_fill(0,8,"default.png");
$i=0;
        if ($handle = opendir($log_directory))
        {
                //Notice the parentheses I added:
                while(($file = readdir($handle)) !== FALSE)
                {
      if($file!="." && $file!=".."){
                        $results_array[$i++] = $file;
      }
                }
                closedir($handle);
        }
?>

  
<div id="wrapper">
<div id="shape">
<div class="plane p1"><img src=<?php echo "./Employer/upload/".$results_array[0] ?> width="200px" height="200px"></div>
<div class="plane p2"><img src=<?php echo "./Employer/upload/".$results_array[1] ?> width="200px" height="200px"></div>
<div class="plane p3"><img src=<?php echo "./Employer/upload".$results_array[2] ?> width="200px" height="200px"></div>
<div class="plane p4"><img src=<?php echo "./Employer/upload".$results_array[3] ?> width="200px" height="200px"></div>
<div class="plane p5"><img src=<?php echo "./Employer/upload/".$results_array[4] ?> width="200px" height="200px"></div>
<div class="plane p6"><img src=<?php echo "./Employer/upload/".$results_array[5] ?> width="200px" height="200px"></div>
<div class="plane p7"><img src=<?php echo "./Employer/upload/".$results_array[6] ?> width="200px" height="200px"></div>
<div class="plane p8"><img src=<?php echo "./Employer/upload/".$results_array[7] ?> width="200px" height="200px"></div>
</div>
</div>
</div>
<br/>
<br/>

       

      
 <?php
include "includes/right.php"
?>               



 
<?php
include "includes/footer.php"
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
