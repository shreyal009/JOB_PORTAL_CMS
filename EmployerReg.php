<!DOCTYPE html>
<html lang="cs">
<head>
     <meta charset="UTF-8" />
    <meta name="description" content="A website to find Job in a reputed Company" />
    <meta name="keywords" content="Job, COMPANY,PORTAL, RECRUITER" />
    <meta name="author" content="Shreyal" />
    <meta http-equiv="refresh" content="" />
    
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
                <h2><span><a href="#">Employer Registration Form</a></span></h2>
               <div class="login">

                <form action="EmployerInsert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>Company Name:</td>
                      <td>
                        <label>
                        <input type="text" name="txtName" id="txtName" required/>
                        </label>
                  
                    </tr>
                   
                    <tr>
                      <td>Contact Person:</td>
                      <td>
                        <label>
                        <input type="text" name="txtPerson" id="txtPerson" required/>
                        </label>
                      
                    </tr>
                    <tr>
                      <td>Address:</td>
                      <td>
                        <label>
                        <textarea name="txtAddress" id="txtAddress" cols="45" rows="5" required></textarea>
                        </label>
                      
                    </tr>
                    <tr>
                      <td>City:</td>
                      <td>
                        <label>
                        <input type="text" name="txtCity" id="txtCity" required/>
                        </label>
                      
                    </tr>
                    <tr>
                      <td>Email:</td>
                      <td>
                        <label>
                        <input type="email" name="txtEmail" id="txtEmail" required/>
                        </label>
                      
                    </tr>
                    <tr>
                      <td>Mobile:</td>
                      <td>
                        <label>
                        <input type="text" maxlength="10"  pattern="[0-9]{10}"  name="txtMobile" id="txtMobile" required/>
                        </label>
                      
                    </tr>
                    <tr>
                      <td>Area of Work: </td>
                      <td>
                      <input type="text" name="txtAreaWork" id="txtAreaWork" required/>
                      
                    </tr>
                    <tr>
                    <tr>
                      <td>Logo Icon:</td>
                    <td>
                        <label>
                        <input type="file" name="fileLogo" id="fileLogo" />
                        </label>
                      
                    </tr>

                    <tr>
                      <td>User Name:</td>
                    <td>
                        <label>
                        <input type="text" name="txtUserName" id="txtUserName" required/>
                        </label>
                      
                    </tr>
                    <tr>
                      <td>Password:</td>
                      <td><label>
                        <input type="password" name="txtPassword" id="txtPassword" required/>
                      
                    </tr>
                    <tr>
                      <td>Security Question:</td>
                      <td><select name="cmbQue" id="cmbQue">
                        <option>What is Your Pet Name?</option>
                        <option selected="selected">Who is Your Favourite Person?</option>
                        <option>What is the Name of Your First School?</option>
                                                                  </select></td>
                    </tr>
                    <tr>
                      <td>Answer:</td>
                      <td>
                      <label>
                      <input type="text" name="txtAnswer" id="txtAnswer" required/>
                      </label>
                      
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
include "includes/footer.php"
?>
</div> <!-- /main -->
</body>
</html>
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
