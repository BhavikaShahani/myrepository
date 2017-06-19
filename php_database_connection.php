<?php
	$servername="locahost";
	$password =" ";
	$username="root";
	$dbname="login";
	$conn= new mysqli_connect($servername, $username, $password, $dbname);
	//checking the connection
	if($conn->connect_error)
	{
		die("Try again later");
	}
	else
		    header('Location: '.$url);
?>