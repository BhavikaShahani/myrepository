<?php
	//insert into database in table applicaion_form_details

	require("database_connection.php");
	if(isset($_POST["app_date"]))
	{
		$application_date = $_POST["app_date"];
	}

	if(isset($_POST["lname"]))
	{
		$last = $_POST["lname"];
	}
	
	if(isset($_POST["fname"]))
	{
		$first =$_POST["fname"];
	}
	
	if(isset($_POST["lname"]))
	{
		$last = $_POST["lname"];
	}
	
	if(isset($_POST["mname"]))
	{
		$middle = $_POST["mname"];
	}
	
	if(isset( $_POST["phno"]))
	{
		$phne = $_POST["phno"];
	}
	
	if(isset($_POST["dob"]))
	{
		$Dob = $_POST["dob"];
	}
	
	if(isset($_POST["branch"]))
	{
		$Branch = $_POST["branch"];
	}
	
	if(isset($_POST["yr_admit"]))
	{
		$yoa = $_POST["yr_admit"];
	}
	

	if(isset($_POST["yr_passing"]))
	{
		$yop = $_POST["yr_passing"];
	}
		

	if(isset($_POST["percentage"]))
	{
		$percent = $_POST["percentage"];
	}
		

	if(isset($_POST["caste"]))
	{
		$Caste = $_POST["caste"];
	}

	if(isset($_POST["subcaste"]))
	{
		$sub_caste = $_POST["subcaste"];
	}
		

	if(isset($_POST["yr_adms"]))
	{
		$yr_admission = $_POST["yr_adms"];
	}
		

	if(isset($_POST["sch_name"]))
	{
		$school = $_POST["sch_name"];
	}

	if(isset($_POST["image"]))
	{
		$Signature = $_POST["image"];
	}

	
	$sql="Insert into application_form_details values ('$application_date','$last','$first','$middle','$phne','$Dob','$Branch','$yoa','$yop','$percent','$Caste','$sub_caste','$yr_admission','$school','$Signature')";

	if ($conn->query($sql) === TRUE)
	{
	    echo "Form successfully submitted";
	}
	else
	{
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>