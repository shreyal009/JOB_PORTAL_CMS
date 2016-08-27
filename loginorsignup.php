<!DOCTYPE html>
<html style="background: url('login.jpg');" lang="en">
  <head>
   <meta charset="UTF-8" />
    <meta name="description" content="A website to find Job in a reputed Company" />
    <meta name="keywords" content="Job, COMPANY,PORTAL, RECRUITER" />
    <meta name="author" content="Shreyal" />
    <meta http-equiv="refresh" content="30" />
    <meta charset="UTF-8">
    <title>Login</title>
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

   
<div class="container" style="text-align:center;">
	<section id="content">
		<form name="form1" method="post" action="login.php">
			<h1>Login Here</h1>
			<div>
				<input type="text" pattern="[a-zA-Z0-9]+" placeholder="Username" id="txtUser" name="txtUser" required/>
			</div>
			<div>
				<input type="password" placeholder="Password" id="txtPass" name="txtPass"  required/>
			</div>
			<div>
				<select name="cmbUser" id="cmbUser">
                          <option value="JobSeeker" selected="selected">JobSeeker</option>
                          <option value="Employer">Employer</option>
                          <option value="Administrator">Administrator</option>
                          <option value="User">User</option>
                          </select>
			</div>

			<div>
				<input type="submit" value="Login" name="button" id="button" />

				<a href="Forget.php">Lost your password?</a>
				<a href="JobSeekerReg.php">Job Seeker Register</a>
				<a href="EmployerReg.php">Employer Register</a>
			</div>
					</form><!-- form -->
		<button style="font-size:20px;"><a href="index.php">Go Back</a></button>

		
	
	</section><!-- content -->
</div><!-- container -->
</body>
    
</html>
