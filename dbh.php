<?php

function openConn()
{

	// set variables for database credentials
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "GB_inventory";
	
	// Create connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
	
	return $conn;

}

function closeConn($conn)
 {
 $conn -> close();
 }

?>