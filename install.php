<?php
	
	include "includes/ConfigChecks.php";
	include "includes/doInstall.php";
?>
<!doctype html> 
<html lang="en" class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Install Job Portal CMS 1.0</title>
		<link rel="stylesheet" href="css/insmain.css" type="text/css" media="all" />
	</head>
	<body class="install">
	 <a href="docs/docs.php" target="_blank" style="float:right;">
        <img title="Documentation" src="./upload/documentation.png" alt="Documentation" />
    </a>
		<div class="install_wrapper">
			<?php if ($installed) { ?>
			<h1>Job Portal 1.0 Installed</h1>
			<form method="post" action="" class="module">
				<h2 class="getting_started"><span></span>Installation Complete</h2>
				<fieldset class="clear">
				<p>Your new Job Portal site is ready to go! Login to the CMS using the email/password you entered on the previous page.</p>
					<p class="delete_message">Remember to delete install.php from your root folder as it is publicly accessible.</p>
				</fieldset>
				<hr />
				<h2>Public Site</h2>
				<fieldset class="clear">
					<p><small>URL</small><a href="<?php echo $www_root; ?>"><?php echo $www_root; ?></a></p>
				</fieldset>
				<br /><br />
				<h2>Administration Area</h2>
				<fieldset class="clear">
				<p>
					<small>URL :</small><?php echo $static_root."Admin/index.php"; ?><br />
					<small>USER NAME :</small><?php echo $cms_user; ?><br/>
					<small>PASSWORD :</small><?php for ($i = 0, $count = strlen($cms_pass); $i < $count; $i++) { echo "*"; } ?><br />
				</p>
				</fieldset>
				
				<br class="clear" /><br />
			</form>
			<?php } else {
				if(!isset($useradmin)){ $useradmin=""; }
				if(!isset($passwordadmin)){ $passwordadmin=""; }
				 
				if(!isset($host)){ $host=""; }
				if(!isset($db)){ $db=""; }
				if(!isset($user)){ $user=""; }
				if(!isset($password)){ $password=""; }
				if(!isset($cms_user)){ $cms_user=""; }
				if(!isset($cms_pass)){ $cms_pass=""; }
				if(!isset($warnings)){ $warnings=array(); }


?>
			<h1>Install Job Portal CMS 1.0</h1>
			<form method="post" action="" class="module">
				<h2 class="getting_started"><span></span>Getting Started</h2>
				<fieldset class="clear">
					<p>Welcome to the Job Portal installer.</p>
					<br />
				</fieldset>
				<?php
				
					if (count($warnings)) {
						echo '<br />';
						foreach ($warnings as $warning) {
				?>
				<p class="warning_message clear"><?php echo $warning?></p>
				<?php
						}
					}
					if (count($fails)) {
						echo '<br />';
						foreach ($fails as $fail) {
				?>
				<p class="error_message clear"><?php echo $fail?></p>
				<?php
						}
				echo '<br /><fieldset class="clear"><p><strong>Please resolve all the errors marked in red above to install Job Portal.</strong></p></fieldset><br /><br />';
					} else {
						if ($error) {
							echo '<br />';
				?>
				<p class="error_message clear"><?php echo $error?></p>
				<?php
						}
				?>
				<hr />
				
				<h2 class="database"><span></span>Database Properties</h2>
				<fieldset class="clear">
					<p>Enter your MySQL database information below.</p>
				</fieldset>
				<hr />
				<fieldset class="left<?php if (count($_POST) && !$host) { ?> form_error<?php } ?>">
					<label>Hostname</label>
					<input required class="text" type="text" id="db_host" name="host" value="<?php echo $host;?>" tabindex="1" />
				</fieldset>
				<fieldset class="right<?php if (count($_POST) && !$db) { ?> form_error<?php } ?>">
					<label>Database</label>
					<input required class="text" type="text" id="db_name" name="db" value="<?php echo $db;?>" tabindex="2" />

				</fieldset>
				<br class="clear" /><br />
				<fieldset class="left<?php if (count($_POST) && !$user) { ?> form_error<?php } ?>">
					<label>Database Admin  Username</label>
					<input required class="text" type="text" id="db_useradmin" name="useradmin" value="<?php echo $useradmin; ?>" tabindex="3" autocomplete="off" />
				</fieldset>
				<fieldset class="right">
					<label>Database Admin Password</label>
					<input required class="text" type="password" id="db_passadmin" name="passwordadmin" value="<?php echo $passwordadmin; ?>" tabindex="4" autocomplete="off" />
				</fieldset>

				<br />
				<br />


				</fieldset>
				<br class="clear" /><br />
				<fieldset class="left<?php if (count($_POST) && !$user) { ?> form_error<?php } ?>">
					<label>New Database  Username</label>
					<input required class="text" type="text" id="db_user" name="user" value="<?php echo $user; ?>" tabindex="3" autocomplete="off" />
				</fieldset>
				<fieldset class="right">
					<label>New Password</label>
					<input required class="text" type="password" id="db_pass" name="password" value="<?php echo $password; ?>" tabindex="4" autocomplete="off" />
				</fieldset>
				<br />
				<br />
				<hr />
				<h2 class="account"><span></span>Administrator Account</h2>
				<fieldset class="clear">
					<p>Please enter the desired Username and Password for your site's developer account.</p>
				</fieldset>
				<hr />
				<fieldset class="left<?php if (count($_POST) && !$cms_user) { ?> form_error<?php } ?>">
					<label>CMS Admin Username</label>
					<input required class="text" type="text" id="cms_user" name="cms_user" value="<?php echo htmlspecialchars($cms_user);  ?>" tabindex="10" autocomplete="off" />
				</fieldset>
				<fieldset class="right<?php if (count($_POST) && !$cms_pass) { ?> form_error<?php } ?>">
					<label>CMS Admin Password</label>
					<input required class="text" type="password" id="cms_pass" name="cms_pass" value="<?php echo htmlspecialchars($cms_pass) ?>" tabindex="11" autocomplete="off" />
				</fieldset>
				<hr />
				<br />
				<br />
				<br />
				
								
				<fieldset class="lower">
					<input type="submit" class="button blue" value="Install Now" tabindex="15" />
				</fieldset>
			</form>
			<?php }
			}
 ?>
		</div>
	</body>
</html>
