<?php
	$servername="localhost";
	$password ="";
	$username="root";
	$dbname="login";
	$conn= new mysqli($servername, $username, $password, $dbname);
	//checking the connection
	if($conn->connect_error)
	{
		die("Try again later");
	}
?>