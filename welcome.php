<?php
include_once('config.php');
include_once('setting.php');

$rec = $_FILES['file2'];
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome dashbord</title>
	<link rel="stylesheet" type="text/css" href="css/welcome.css">
	<style type="text/css">
   .bg-img{
  background: url('images/img2.jpg');
  height: 100vh;
  background-size: cover;
  background-position: center;
} 
  </style>
</head>
<body class="bg-img">
  <!----header----->
	<header>
      <div class="left_area">
        <h3>Assignment <span>Monitoring </span>System</h3>
      </div>
    </header>
    <div class="wrap">
      <div class="item">
        <a href="admin.php" style="text-decoration: none;"><button class="outline">LECTURER LOGIN</button></a>
      </div>
      <div class="item">
        <a href="login.php" style="text-decoration: none;"><button class="outline">STUDENT LOGIN</button></a>
      </div>
    </div>    
</body>
</html>