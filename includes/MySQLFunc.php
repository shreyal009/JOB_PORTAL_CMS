<?php
		// Setup SQL functions for MySQLi extension if we have it.
	if (function_exists("mysqli_connect")) {
		function sqlconnect() {
			include "dbenvironment.php";
			return mysqli_connect($host,$user,$password,$db);
		}

		function sqlselectdb($db) {
			global $sql_connection;
			return $sql_connection->select_db($db);
		}

		function sqlquery($query) {
			global $sql_connection;
			return $sql_connection->query($query);
		}

		function sqlescape($string) {
			global $sql_connection;
			return $sql_connection->real_escape_string($string);
		}
		function sqlfetcharray($result){
			if($result){
				return mysqli_fetch_array($result);
			}
			else
			{	return Array();	}
		}
		function sqlnumrows($result){
			return mysqli_num_rows($result);		
		}
		function sqlerror(){
			return mysqli_error();		
		}


			// Otherwise Use MySQL
	} else {
		function sqlnumrows($result){
			return mysql_num_rows($result);		
		}
		function sqlerror(){
			return mysql_error($result);		
		}
		function sqlconnect() {
			include "dbenvironment.php";
			return mysql_connect($host,$user,$password,$db);
		}

		function sqlselectdb($db) {
			return mysql_select_db($db);
		}

		function sqlquery($query) {
			return mysql_query($query);
		}

		function sqlescape($string) {
			return mysql_real_escape_string($string);
		}
		function sqlfetcharray($result){
			if($result){
				return mysql_fetch_array($result);
			}
			else
			{	return Array();	}
		}
		function sqlnumrows($result){
			return mysql_num_rows($result);		
		}
		function sqlerror(){
			return mysql_error();		
		}
		


	}

?>
