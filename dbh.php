<?php

function openCon()
{
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "GB_inventory";


	// set variables for database credentials
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "GB_inventory";
	
	// Create connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
	
	return $conn;

}

function CloseCon($conn)
 {
 $conn -> close();
 }

?>