<?php
	session_start();
?>
<!Doctype html>
<html>
	<body>
		<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Email id : <input type ="email" name ="email"><br>
		Password : <input type = "password" name="pwd"><br>
		<input type ="submit" value= "login" name="login">
		</form>
		 <?php
		 	include "database_connection.php";
	        $msg = '';    
	        if($_SERVER["REQUEST_METHOD"] == "POST")
	        {
		      $myemail = mysqli_real_escape_string($conn,$_POST['email']);
		      $mypwd = mysqli_real_escape_string($conn,$_POST['pwd']); 
		      
		      $sql = "SELECT id FROM login WHERE email = '$myemail' and password = '$mypwd'";
		      $result = mysqli_query($conn,$sql);
		      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		      $active = $row['email'];
		      
		      $count = mysqli_num_rows($result);
				
		      if($count == 1)
		      {
		         session_register("myemail");
		         $_SESSION['login_user'] = $myemail;
		         
		         header("location: application_form.php");
		      }
		      else
		      {
		         $error = "Your Login Name or Password is invalid";
		      }
			}
		?>

	</body>
</html>