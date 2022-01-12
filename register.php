<?php
include_once('config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['Username'];
$address=$_POST['regNo'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"INSERT INTO users(username,regNo,password) VALUES('$fname','$address','$password')");
if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
	
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
.bg-img{
  background: url('images/img.jpg');
  height: 100vh;
  background-size: cover;
  background-position: center;
}
	</style>

	<script type="text/javascript">
			function valid()
				{
 					if(document.register.password.value!= document.register.password_again.value)
						{
							alert("Password and Confirm Password Field do not match  !!");
							document.register.password_again.focus();
							return false;
						}
						return true;
				}
		</script>
</head>
<body class="bg-img">
<div class="header">
	<h2>Register</h2>
</div>
	<form name="register"  method="POST" onSubmit="return valid();">
		<!-----display validation--->
	
		<div class="input">
			<label>Username</label>
			<input type="text" name="Username"  required>
			
		</div>
		<div class="input">
			<label>RegNo</label>
			<input type="text" name="regNo" required>
			
		</div>
		<div class="input">
			<label>password</label>
			<input type="password" name="password" id="Show" required>
		</div>
		<div class="input">
			<label>Confirm password</label>
			<input type="password" name="password_again" id="Show1" required>
		</div>
		<label>Show password</label>
			<input type="checkbox" name="" onclick="myFunction()">
		<br><br>
		<div class="input">
			<button type="submit" name="submit" class="btn">Register</button>
		</div>
		<p>Already register? <a href="login.php">login here</a></p>
		<script type="text/javascript">
			function myFunction() {
				var show = document.getElementById('Show')
				if (show.type == 'password') {
					show.type ='text';
				}
				else{
					show.type = 'password';
				}
			}
		</script>
		<script type="text/javascript">
			function myFunction() {
				var show = document.getElementById('Show1')
				if (show.type == 'password_again') {
					show.type ='text';
				}
				else{
					show.type = 'password_again';
				}
			}
		</script>
	</form>

	
</body>
</html>