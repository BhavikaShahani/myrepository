<?php
	session_start();
?>
<!Doctype html>
<html>
	<body>
	<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Username : <input type ="email" name ="uname"><br>
		Password : <input type = "password" name="pwd">
	</form>
	</body>
</html>