<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method ="post" action="app_form_controller.php">
		Application date: <input type="date" name="app_date"><br>
		Student name :<br>
		<ul style="list-style-type: none">
			<li>Lastname : <input type="text" name="lname"></li><br>
			<li>Firstname : <input type="text" name="fname"></li><br>
			<li>Middlename : <input type="text" name="mname"></li><br>
		</ul><br>
		Phone no : <input type="text" name="phno"><br><br>
		Date of Birth: <input type="date" name="dob"><br><br>
		Branch : <input type="text" name="branch"><br><br>
		Academic Year of admission : <input type="number" name ="yr_admit" min="1999" max="2013" step="1" value="2013" /><br><br>
		Year of passing : <input type="number" name="yr_passing" min="1999" max="2017" step="1" value="2017" /><br><br>
		Percentage : <input type="number" name="percentage"><br><br>
		Caste :	<br>
				<ul style="list-style-type: none">
					<li><input type="radio" name="caste">SC</li><br>
					<li><input type="radio" name="caste">ST</li><br>
					<li><input type="radio" name="caste">OBC</li><br>
					<li><input type="radio" name="caste">OPEN</li><br>
					<li><input type="radio" name="caste">OTHER</li><br>
				</ul>
		Sub-Caste : <input type="text" name="subcaste"></br><br>
		<input type="radio" name="yr_adms"> FE &nbsp;&nbsp; <input type="radio" name="yr_adms"> DSE <br><br>
		Last attended School name in full : <input type="text" name="sch_name"><br>
		Student Signature : <input type="file" name="image"><br><br>
		<input type="submit" name="submit_form" value =" submit">
	</form>
</body>
</html>
