<?php
session_start();

include("config.php");
if(isset($_POST['submit']))
{
$ret=mysqli_query($con,"SELECT * FROM users WHERE username='".$_POST['Username']."' and password='".md5($_POST['password'])."'");
$num=mysqli_num_rows($ret);
if($num>0)
{
$extra="dashboard.php";
$_SESSION['login']=$_POST['Username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;


// For stroing log if user login successfull

$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
	
$_SESSION['login']=$_POST['Username'];	
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;

$_SESSION['errmsg']="Invalid username or password";
$extra="login.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sudent login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
.bg-img{
  background: url('images/img.jpg');
  height: 100vh;
  background-size: cover;
  background-position: center;
}
	</style>
</head>
<body class="bg-img" >
	<br>
	<br>
<div class="header">
	<h2>Student <span style="color: #19B3D3;">Login</span> </h2>
</div>
	<form method="POST">
		<p>
			<!--<span style="color:red;"><?php// echo $_SESSION['errmsg']; ?>-->
			<?php echo $_SESSION['errmsg']="";?></span>
		</p>

		<div class="input">
			<label>Username</label>
			<input type="text" name="Username" required>
		</div>
		<div class="input">
			<label>password</label>
			<input type="password" name="password" id="Show" required>
		</div>
		<label>Show password</label>
			<input type="checkbox" name="" onclick="myFunction()">
		<br><br>
		<div class="input">
			<button type="submit" name="submit" class="btn">login</button>
		</div>
		<p>Not register? <a href="register.php">Register here</a></p>
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
	</form>
</body>
</html>