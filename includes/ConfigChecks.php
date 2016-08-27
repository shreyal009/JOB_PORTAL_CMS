<?php
		// General Issues
	$fails = array();
	if (!extension_loaded("mysql") && !extension_loaded("mysqli")) {
		$fails[] = "PHP does not have the MySQL extension installed.";
	}
	if (!ini_get('file_uploads')) {
		$fails[] = "PHP does not have file uploads enabled.";
	}
	if (!is_writable(".")) {
		$fails[] = "Please make the current directory writable.";
	}
?>
