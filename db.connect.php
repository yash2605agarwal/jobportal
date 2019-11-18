<!-- Database Connectivity Code
	 For connecting web pages to database for synchronization of data with database. --> 
<!--<?php
	//Assigning values to variables.
	$conn_error = 'Error in connecting to server';
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	$mysql_db = 'jobsportal';
	
	//Code for sever connection and database connection.
	//if(!@mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !@mysql_select_db($mysql_db))
	{
		//die($conn_error);
		
	}
?>-->

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobsportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 