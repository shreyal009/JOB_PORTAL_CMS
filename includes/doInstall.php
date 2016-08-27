<?php
	include "MySQLFunc.php";
		// Clean all post variables up, prevent SESSION hijacking.
	foreach ($_POST as $key => $val) {
		if (substr($key,0,1) != "_") {
			$$key = $val;
		}
	}
	
	$success = false;
	$installed = false;
	$error = false;
	if (count($_POST) && !($db && $host && $user && $cms_user && $cms_pass)) {
		$error = "Errors found! Please fix the highlighted fields and submit the form again.";
	} elseif (count($_POST)) {
		if ($db && $host && $user && $cms_user && $cms_pass) {
				
				if (function_exists("mysqli_connect")) {
					$sql_connection = mysqli_connect($host,$useradmin,$passwordadmin);
					if($sql_connection){
					$sql="SELECT user from mysql.user WHERE user='$user";
					if(!$sql_connection->query($sql)){
					$sql="CREATE USER '$user'@'$host' IDENTIFIED BY '$password'";
					$sql_connection->query($sql);}
					$sql="CREATE DATABASE $db";
					if($sql_connection->query($sql)===TRUE){
					$sql="GRANT ALL ON $db.* TO '$user'@'$host'";
					if($sql_connection->query($sql)===TRUE){ 
							$sql_connection = mysqli_connect($host,$user,$password,$db);

							}
					}
				}
			}
		
	
				else
				{
					$sql_connection = mysql_connect($host,$useradmin,$passwordadmin);
					if($sql_connection){
					$sql="SELECT user from mysql.user WHERE user='$user";
					if(!$sql_connection->query($sql)){
					$sql="CREATE USER '$user'@'$host' IDENTIFIED BY '$password'";
					$sql_connection->query($sql);}
					$sql="CREATE DATABASE $db";
					if($sql_connection->query($sql)===TRUE){
					$sql="GRANT ALL ON $db.* TO '$user'@'$host'";
					if($sql_connection->query($sql)===TRUE){ 
							$sql_connection = mysql_connect($host,$user,$password,$db);

							}
					}
				}
					
				}
		}
		
		if (!$sql_connection) {
			$error = "Could not connect to MySQL server.";
		} 
		else {
			$sql_queries = explode("\n\n",file_get_contents("job.sql","true"));
			foreach ($sql_queries as $query) {
			$query = trim($query);
			if ($query != "") {
				$q = sqlquery($query);
			}
		}
		}
	}

	
	
	if (!$error && count($_POST)) {

		if (!isset($domain)) {
			$domain = "http://".$_SERVER["HTTP_HOST"];
				$static_root = $domain.str_replace("install.php","",$_SERVER["REQUEST_URI"]);
				$www_root = $static_root."index.php";
			}
		
		$find = array(
			"[installed]",	
			"[host]",
			"[db]",
			"[user]",
			"[password]",
			
		);
		
		$replace = array(
			true,
			$host,
			$db,
			$user,
			$password,
			
		);
		
		file_put_contents("dbenvironment.php",str_replace($find,$replace,file_get_contents("dbenvconfig.php","true")),true);
		include "PasswordHash.php";
		$phpass = new PasswordHash(8, TRUE);
		$enc_pass = $phpass->HashPassword($cms_pass);
		sqlquery("INSERT INTO user_master (`UserId`,`UserName`,`Password`,`UserLevel`) VALUES (1,'$cms_user','$enc_pass',0)");
		$installed = true;
	}
	
	
?>

