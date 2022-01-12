<!DOCTYPE html>
<html lang="en">
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		.bg-img{
  background: url('images/img2.jpg');
  height: 100vh;
  background-size: cover;
  background-position: center;
}
.button {
    width: 100%;
    padding: 8px;
    color: #ffffff;
    background: none #191970;
    border: none;
    border-radius: 6px;
    font-size: 18px;
    cursor: pointer;
    margin: 12px 0;
}
	</style>
</head>
<body class="bg-img">
	<br>
	<br>
<div class="header">
	<h2>Lecturer <span style="color: #19B3D3;">Login</span> </h2>
</div>
	<form action="validate.php" method="POST">
		<div class="input">
			<label>Username</label>
			<input type="text" name="adminname" value=""  required>
		</div>
		<div class="input">
			<label>password</label>
			<input type="password" name="password" value="" id="Show" required>
		</div>
	
			<label>Show password</label>
			<input type="checkbox" name="" onclick="myFunction()">
		<br><br>
		<input class="button" type="submit"
                     name="login" value="Sign In">
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