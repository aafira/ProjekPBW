<?php
	
	//akun database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "proyek_pbw";
	
	//create connection
	mysql_connect($servername, $username, $password) or die ("Server Mati");
	
	//select database
	mysql_select_db($db) or die ("Databases tidak ada");
	
?>